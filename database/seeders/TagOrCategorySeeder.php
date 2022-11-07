<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Tag;
use App\Models\Category;
use Faker\Factory as Faker;

class TagOrCategorySeeder extends Seeder
{
    use RefreshDatabase;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    
    {
        $faker = Faker::create();
        
        for ($i = 1; $i < 20; $i++) {
            Tag::create([
                'title' => $faker->text(),
            ]);
        }

        for ($i = 1; $i < 20; $i++) {
            Category::create([
                'title' => $faker->text(),
            ]);
        }
    }
}
