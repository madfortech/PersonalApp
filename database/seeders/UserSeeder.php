<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => bcrypt('password'),
                'remember_token' => null,
            ],
        ];

        User::insert($users);

        $faker = Faker::create();

        for($i = 1 ; $i <= 100 ; $i++){
            User::create([
                'name' => $faker->name,
                'email'  => $faker->email,
                'password'     => bcrypt('$faker->password'),

            ]);
        } 
    }
}
