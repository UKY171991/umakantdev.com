<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ServiceCategory;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Web Development',
                'slug' => 'web-development',
                'description' => 'Custom websites and web applications built with modern technologies',
                'icon' => 'fas fa-code',
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'name' => 'UI/UX Design',
                'slug' => 'ui-ux-design',
                'description' => 'Beautiful and user-friendly interface designs',
                'icon' => 'fas fa-palette',
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'name' => 'Mobile Development',
                'slug' => 'mobile-development',
                'description' => 'Native and cross-platform mobile applications',
                'icon' => 'fas fa-mobile-alt',
                'is_active' => true,
                'sort_order' => 3,
            ],
            [
                'name' => 'SEO Strategy',
                'slug' => 'seo-strategy',
                'description' => 'Search engine optimization and digital marketing',
                'icon' => 'fas fa-search',
                'is_active' => true,
                'sort_order' => 4,
            ],
            [
                'name' => 'E-commerce Solutions',
                'slug' => 'ecommerce-solutions',
                'description' => 'Online stores and e-commerce platforms',
                'icon' => 'fas fa-shopping-cart',
                'is_active' => true,
                'sort_order' => 5,
            ],
        ];

        foreach ($categories as $category) {
            ServiceCategory::updateOrCreate(
                ['slug' => $category['slug']],
                $category
            );
        }
    }
}
