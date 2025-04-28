<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create admin user
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ]);

        // Create regular user
        User::create([
            'name' => 'Regular User',
            'email' => 'user@example.com',
            'password' => Hash::make('password'),
        ]);

        // Create categories
        $categories = [
            [
                'name' => 'Electronics',
                'slug' => 'electronics',
                'description' => 'Electronic devices and gadgets',
                'is_active' => true
            ],
            [
                'name' => 'Clothing',
                'slug' => 'clothing',
                'description' => 'Fashion and apparel',
                'is_active' => true
            ],
            [
                'name' => 'Home & Kitchen',
                'slug' => 'home-kitchen',
                'description' => 'Home and kitchen appliances and accessories',
                'is_active' => true
            ],
            [
                'name' => 'Books',
                'slug' => 'books',
                'description' => 'Books, e-books, and audiobooks',
                'is_active' => true
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }

        // Create products
        $products = [
            // Electronics
            [
                'category_id' => 1,
                'name' => 'Smartphone X',
                'slug' => 'smartphone-x',
                'description' => 'Latest smartphone with advanced features and high-resolution camera.',
                'price' => 699.99,
                'quantity' => 50,
                'is_featured' => true,
                'is_active' => true
            ],
            [
                'category_id' => 1,
                'name' => 'Laptop Pro',
                'slug' => 'laptop-pro',
                'description' => 'Powerful laptop for professionals with high performance and long battery life.',
                'price' => 1299.99,
                'quantity' => 30,
                'is_featured' => true,
                'is_active' => true
            ],
            [
                'category_id' => 1,
                'name' => 'Wireless Earbuds',
                'slug' => 'wireless-earbuds',
                'description' => 'Premium wireless earbuds with noise cancellation and crystal clear sound.',
                'price' => 149.99,
                'quantity' => 100,
                'is_featured' => false,
                'is_active' => true
            ],
            [
                'category_id' => 1,
                'name' => 'Smart Watch',
                'slug' => 'smart-watch',
                'description' => 'Track your fitness and stay connected with this stylish smart watch.',
                'price' => 249.99,
                'quantity' => 75,
                'is_featured' => false,
                'is_active' => true
            ],

            // Clothing
            [
                'category_id' => 2,
                'name' => 'Men\'s Casual Shirt',
                'slug' => 'mens-casual-shirt',
                'description' => 'Comfortable and stylish casual shirt for men.',
                'price' => 39.99,
                'quantity' => 200,
                'is_featured' => true,
                'is_active' => true
            ],
            [
                'category_id' => 2,
                'name' => 'Women\'s Dress',
                'slug' => 'womens-dress',
                'description' => 'Elegant dress for women, perfect for special occasions.',
                'price' => 79.99,
                'quantity' => 150,
                'is_featured' => true,
                'is_active' => true
            ],
            [
                'category_id' => 2,
                'name' => 'Running Shoes',
                'slug' => 'running-shoes',
                'description' => 'Comfortable and durable running shoes for athletes.',
                'price' => 89.99,
                'quantity' => 100,
                'is_featured' => false,
                'is_active' => true
            ],
            [
                'category_id' => 2,
                'name' => 'Winter Jacket',
                'slug' => 'winter-jacket',
                'description' => 'Warm and waterproof jacket for cold winter days.',
                'price' => 129.99,
                'quantity' => 80,
                'is_featured' => false,
                'is_active' => true
            ],

            // Home & Kitchen
            [
                'category_id' => 3,
                'name' => 'Coffee Maker',
                'slug' => 'coffee-maker',
                'description' => 'Automatic coffee maker for brewing delicious coffee at home.',
                'price' => 89.99,
                'quantity' => 60,
                'is_featured' => true,
                'is_active' => true
            ],
            [
                'category_id' => 3,
                'name' => 'Blender',
                'slug' => 'blender',
                'description' => 'Powerful blender for smoothies, soups, and more.',
                'price' => 69.99,
                'quantity' => 70,
                'is_featured' => false,
                'is_active' => true
            ],
            [
                'category_id' => 3,
                'name' => 'Bedding Set',
                'slug' => 'bedding-set',
                'description' => 'Luxurious bedding set for a comfortable night\'s sleep.',
                'price' => 99.99,
                'quantity' => 50,
                'is_featured' => false,
                'is_active' => true
            ],
            [
                'category_id' => 3,
                'name' => 'Kitchen Knife Set',
                'slug' => 'kitchen-knife-set',
                'description' => 'Professional-grade kitchen knife set for cooking enthusiasts.',
                'price' => 149.99,
                'quantity' => 40,
                'is_featured' => true,
                'is_active' => true
            ],

            // Books
            [
                'category_id' => 4,
                'name' => 'The Great Novel',
                'slug' => 'the-great-novel',
                'description' => 'Bestselling novel that has captivated readers worldwide.',
                'price' => 19.99,
                'quantity' => 300,
                'is_featured' => true,
                'is_active' => true
            ],
            [
                'category_id' => 4,
                'name' => 'Cookbook Collection',
                'slug' => 'cookbook-collection',
                'description' => 'Collection of recipes from around the world.',
                'price' => 29.99,
                'quantity' => 150,
                'is_featured' => false,
                'is_active' => true
            ],
            [
                'category_id' => 4,
                'name' => 'Self-Help Guide',
                'slug' => 'self-help-guide',
                'description' => 'Guide to personal development and success.',
                'price' => 15.99,
                'quantity' => 200,
                'is_featured' => false,
                'is_active' => true
            ],
            [
                'category_id' => 4,
                'name' => 'Science Fiction Series',
                'slug' => 'science-fiction-series',
                'description' => 'Epic science fiction series set in a distant future.',
                'price' => 49.99,
                'quantity' => 100,
                'is_featured' => true,
                'is_active' => true
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
