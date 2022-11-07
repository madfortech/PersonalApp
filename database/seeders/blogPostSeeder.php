<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Blogpost;
use Faker\Factory as Faker;

class blogPostSeeder extends Seeder
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

        // for($i = 1 ; $i <= 30; $i++){
        //     Blogpost::create([
        //         'title' => $faker->text,
        //         'description'  => $faker->sentences,
        //     ]);
        // } 

        for ($i = 1; $i < 30; $i++) {
            Blogpost::create([
                'title' => $faker->text(),
                'description'  => $faker->text(200),
                'created_at' => $faker->dateTime(),
                'updated_at' => $faker->dateTime(),
            ]);
        }
         
    }
}
