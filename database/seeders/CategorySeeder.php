<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Health',
            'Family',
            'Faith',
            'Guidance',
            'Thanksgiving',
            'Forgiveness',
            'Protection',
            'Wisdom',
            'Peace',
            'Joy',
            'Love',
            'Marriage',
            'Children',
            'Parents',
            'Friends',
            'Career',
            'Finances',
            'Nation',
            'World',
            'Church'
        ];

        foreach ($categories as $category) {
            Category::firstOrCreate(['name' => $category]);
        }
    }
}
