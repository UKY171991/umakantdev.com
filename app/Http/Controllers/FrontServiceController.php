<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\View\View;

class FrontServiceController extends Controller
{
    public function index(?string $categorySlug = null): View
    {
        $categories = ServiceCategory::where('is_active', true)->orderBy('sort_order')->orderBy('name')->get();
        
        $query = Service::with('category')->where('is_active', true);
        
        $currentCategory = null;
        if ($categorySlug) {
            $currentCategory = ServiceCategory::where('slug', $categorySlug)->where('is_active', true)->first();
            if ($currentCategory) {
                $query->where('service_category_id', $currentCategory->id);
            }
        }
        
        $services = $query->orderBy('sort_order')->orderBy('title')->get();
        
        return view('services', compact('categories', 'services', 'currentCategory'));
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
