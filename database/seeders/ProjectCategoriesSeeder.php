<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Residential'],
            ['name' => 'Commercial'],
            ['name' => 'Industial'],
            ['name' => 'Health'],
            ['name' => 'Institutional'],
            ['name' => 'Hospitality'],
            ['name' => 'Interior'],
            ['name' => 'Other'],
        ];

        DB::table('categories')->insert($categories);
    }
}
