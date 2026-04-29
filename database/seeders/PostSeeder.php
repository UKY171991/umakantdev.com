<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title' => 'Top 10 Web Development Trends for 2026',
                'slug' => 'top-10-web-development-trends-for-2026',
                'content' => 'Full content here...',
                'excerpt' => 'Discover the latest technologies and methodologies that are shaping the future of web development this year.',
                'category' => 'Development',
                'featured_image' => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=600&q=80',
                'author' => 'Admin'
            ],
            [
                'title' => 'Maximizing ROI with Result-Driven SEO',
                'slug' => 'maximizing-roi-with-result-driven-seo',
                'content' => 'Full content here...',
                'excerpt' => 'Learn how to strategize your SEO campaigns to achieve maximum return on investment for your business.',
                'category' => 'SEO',
                'featured_image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=600&q=80',
                'author' => 'Admin'
            ],
            [
                'title' => 'Social Media Marketing: Beyond the Posts',
                'slug' => 'social-media-marketing-beyond-the-posts',
                'content' => 'Full content here...',
                'excerpt' => 'Explore the deeper layers of social media marketing that drive engagement and brand loyalty among users.',
                'category' => 'Marketing',
                'featured_image' => 'https://images.unsplash.com/photo-1557838923-2985c318be48?auto=format&fit=crop&w=600&q=80',
                'author' => 'Admin'
            ],
            [
                'title' => 'The Importance of Clean Code in Business',
                'slug' => 'the-importance-of-clean-code-in-business',
                'content' => 'Full content here...',
                'excerpt' => 'Why clean, sustainable code is essential for the long-term success and scalability of your business applications.',
                'category' => 'Coding',
                'featured_image' => 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=600&q=80',
                'author' => 'Admin'
            ],
            [
                'title' => 'How We Deliver Results for Our Clients',
                'slug' => 'how-we-deliver-results-for-our-clients',
                'content' => 'Full content here...',
                'excerpt' => 'A look behind the scenes at our agile methodology and how we ensure successful project delivery every time.',
                'category' => 'Agency',
                'featured_image' => 'https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&w=600&q=80',
                'author' => 'Admin'
            ],
            [
                'title' => 'User Experience: The Heart of Every App',
                'slug' => 'user-experience-the-heart-of-every-app',
                'content' => 'Full content here...',
                'excerpt' => 'Understanding why UI/UX design is the most critical factor in the adoption and success of any mobile application.',
                'category' => 'UI/UX',
                'featured_image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=600&q=80',
                'author' => 'Admin'
            ],
        ];

        // Add 10 more similar posts to test pagination
        for ($i = 7; $i <= 16; $i++) {
            $posts[] = [
                'title' => "Blog Post Title $i",
                'slug' => "blog-post-title-$i",
                'content' => "Full content for blog post $i...",
                'excerpt' => "This is a sample excerpt for blog post $i to demonstrate pagination.",
                'category' => 'General',
                'featured_image' => 'https://images.unsplash.com/photo-1499750310107-5fef28a66643?auto=format&fit=crop&w=600&q=80',
                'author' => 'Admin',
                'is_published' => true
            ];
        }

        foreach ($posts as $post) {
            \App\Models\Post::create($post);
        }
    }
}
