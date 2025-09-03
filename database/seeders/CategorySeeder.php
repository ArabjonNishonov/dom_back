<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Kvartira',
            'Hovli',
            'Yer',
            'Bino'
        ];
        $types = ['sale', 'rent', 'change'];

        foreach ($categories as $category) {
            Category::create([
                'title' => $category,
                'slug' => Str::slug($category),
                'type' => Arr::random($types),
            ]);
        }
    }
}
