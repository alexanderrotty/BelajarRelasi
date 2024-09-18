<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            [
                'slug' => Str::slug('Brand One'),
                'name' => 'Brand One',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug' => Str::slug('Brand Two'),
                'name' => 'Brand Two',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'slug' => Str::slug('Brand Three'),
                'name' => 'Brand Three',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
