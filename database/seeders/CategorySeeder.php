<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'slug' => Str::slug('Electronics'),
                'name' => 'Electronics',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug' => Str::slug('Fashion'),
                'name' => 'Fashion',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug' => Str::slug('Home & Garden'),
                'name' => 'Home & Garden',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug' => Str::slug('Sports & Outdoors'),
                'name' => 'Sports & Outdoors',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
