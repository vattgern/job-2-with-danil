<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('1234'),
            'avatar' => '/img/5007200.png',
            'administrator' => true
        ]);
        Category::create([
            'title' => 'Торт'
        ]);
        Category::create([
            'title' => 'Кест'
        ]);
        Category::create([
            'title' => 'Тест3'
        ]);

        User::factory(5)->create();
        Product::factory(16)->create();
        Review::factory(50)->create();
    }
}
