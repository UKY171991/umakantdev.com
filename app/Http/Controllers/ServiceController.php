<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ServiceController extends Controller
{
    public function index(): View
    {
        $services = Service::with('category')->orderBy('sort_order')->orderBy('title')->paginate(10);
        return view('admin.services.index', compact('services'));
    }

    public function create(): View
    {
        $categories = ServiceCategory::where('is_active', true)->orderBy('name')->pluck('name', 'id');
        return view('admin.services.create', compact('categories'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255|unique:services,title',
            'description' => 'required|string|max:1000',
            'content' => 'nullable|string',
            'image' => 'nullable|string|max:255',
            'price' => 'nullable|numeric|min:0',
            'price_type' => 'required|in:fixed,hourly,project',
            'service_category_id' => 'required|exists:service_categories,id',
            'is_featured' => 'boolean',
            'is_active' => 'boolean',
            'sort_order' => 'integer|min:0'
        ]);

        $validated['is_featured'] = $request->boolean('is_featured', false);
        $validated['is_active'] = $request->boolean('is_active', false);
        
        Service::create($validated);

        return redirect()->route('admin.services.index')
            ->with('success', 'Service created successfully.');
    }

    public function show(Service $service): View
    {
        $service->load('category');
        return view('admin.services.show', compact('service'));
    }

    public function edit(Service $service): View
    {
        $categories = ServiceCategory::where('is_active', true)->orderBy('name')->pluck('name', 'id');
        return view('admin.services.edit', compact('service', 'categories'));
    }

    public function update(Request $request, Service $service): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255|unique:services,title,' . $service->id,
            'description' => 'required|string|max:1000',
            'content' => 'nullable|string',
            'image' => 'nullable|string|max:255',
            'price' => 'nullable|numeric|min:0',
            'price_type' => 'required|in:fixed,hourly,project',
            'service_category_id' => 'required|exists:service_categories,id',
            'is_featured' => 'boolean',
            'is_active' => 'boolean',
            'sort_order' => 'integer|min:0'
        ]);

        $validated['is_featured'] = $request->boolean('is_featured', false);
        $validated['is_active'] = $request->boolean('is_active', false);
        
        $service->update($validated);

        return redirect()->route('admin.services.index')
            ->with('success', 'Service updated successfully.');
    }

    public function destroy(Service $service): RedirectResponse
    {
        $service->delete();

        return redirect()->route('admin.services.index')
            ->with('success', 'Service deleted successfully.');
    }
}
