<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\ServiceCategory;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $webDevCategory = ServiceCategory::where('slug', 'web-development')->first();
        $uiUxCategory = ServiceCategory::where('slug', 'ui-ux-design')->first();
        $mobileCategory = ServiceCategory::where('slug', 'mobile-development')->first();
        $seoCategory = ServiceCategory::where('slug', 'seo-strategy')->first();
        $ecommerceCategory = ServiceCategory::where('slug', 'ecommerce-solutions')->first();

        $services = [
            [
                'title' => 'Custom Website Development',
                'slug' => 'custom-website-development',
                'description' => 'Build stunning, responsive websites tailored to your business needs',
                'content' => 'We create custom websites that are not only visually appealing but also highly functional. Our team uses the latest technologies like Laravel, React, and Vue.js to build fast, secure, and scalable web applications.',
                'price' => 2999.00,
                'price_type' => 'fixed',
                'service_category_id' => $webDevCategory->id,
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'E-commerce Website',
                'slug' => 'ecommerce-website',
                'description' => 'Complete online store with payment integration and inventory management',
                'content' => 'Launch your online business with a fully-featured e-commerce website. We integrate popular payment gateways, manage inventory systems, and create seamless shopping experiences.',
                'price' => 4999.00,
                'price_type' => 'fixed',
                'service_category_id' => $webDevCategory->id,
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'title' => 'Web Application Development',
                'slug' => 'web-application-development',
                'description' => 'Complex web applications with advanced functionality',
                'content' => 'From SaaS platforms to enterprise solutions, we build robust web applications that solve complex business problems with scalable architecture.',
                'price' => 150.00,
                'price_type' => 'hourly',
                'service_category_id' => $webDevCategory->id,
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 3,
            ],
            [
                'title' => 'UI Design',
                'slug' => 'ui-design',
                'description' => 'Beautiful and intuitive user interface designs',
                'content' => 'Our UI designers create stunning interfaces that users love. We focus on usability, accessibility, and creating memorable digital experiences.',
                'price' => 1999.00,
                'price_type' => 'fixed',
                'service_category_id' => $uiUxCategory->id,
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'UX Research & Design',
                'slug' => 'ux-research-design',
                'description' => 'User-centered design with comprehensive research',
                'content' => 'We conduct thorough user research and testing to create designs that truly meet your users\' needs and expectations.',
                'price' => 2500.00,
                'price_type' => 'fixed',
                'service_category_id' => $uiUxCategory->id,
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'title' => 'Mobile App Development',
                'slug' => 'mobile-app-development',
                'description' => 'Native iOS and Android applications',
                'content' => 'We develop high-performance mobile applications for both iOS and Android platforms using native technologies and cross-platform frameworks.',
                'price' => 7999.00,
                'price_type' => 'fixed',
                'service_category_id' => $mobileCategory->id,
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'Cross-Platform App',
                'slug' => 'cross-platform-app',
                'description' => 'Single codebase apps for multiple platforms',
                'content' => 'Save time and money with cross-platform development using React Native or Flutter. Reach both iOS and Android users with one app.',
                'price' => 5999.00,
                'price_type' => 'fixed',
                'service_category_id' => $mobileCategory->id,
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'title' => 'SEO Optimization',
                'slug' => 'seo-optimization',
                'description' => 'Improve your search engine rankings and organic traffic',
                'content' => 'Our SEO experts optimize your website for better search engine rankings. We handle technical SEO, content optimization, and link building.',
                'price' => 1200.00,
                'price_type' => 'project',
                'service_category_id' => $seoCategory->id,
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'Local SEO',
                'slug' => 'local-seo',
                'description' => 'Dominate local search results in your area',
                'content' => 'Focus on local customers with our specialized local SEO services. We optimize your Google My Business profile and local citations.',
                'price' => 800.00,
                'price_type' => 'project',
                'service_category_id' => $seoCategory->id,
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'title' => 'Shopify Store Setup',
                'slug' => 'shopify-store-setup',
                'description' => 'Complete Shopify store with custom design',
                'content' => 'Launch your e-commerce business with a professionally designed Shopify store. We handle everything from setup to customization.',
                'price' => 3499.00,
                'price_type' => 'fixed',
                'service_category_id' => $ecommerceCategory->id,
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'WooCommerce Development',
                'slug' => 'woocommerce-development',
                'description' => 'Custom WooCommerce stores on WordPress',
                'content' => 'Transform your WordPress site into a powerful e-commerce platform with custom WooCommerce development and integration.',
                'price' => 2799.00,
                'price_type' => 'fixed',
                'service_category_id' => $ecommerceCategory->id,
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 2,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
