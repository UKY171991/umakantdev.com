<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\View\View;

class FrontServiceController extends Controller
{
    public function index(): View
    {
        $categories = ServiceCategory::where('is_active', true)->orderBy('sort_order')->orderBy('name')->get();
        $services = Service::with('category')->where('is_active', true)->orderBy('sort_order')->orderBy('title')->get();
        
        return view('services', compact('categories', 'services'));
    }
    
    public function show(string $slug): View
    {
        $service = Service::with('category')->where('slug', $slug)->where('is_active', true)->firstOrFail();
        $relatedServices = Service::with('category')
            ->where('service_category_id', $service->service_category_id)
            ->where('id', '!=', $service->id)
            ->where('is_active', true)
            ->limit(3)
            ->get();
            
        return view('service-detail', compact('service', 'relatedServices'));
    }
}
