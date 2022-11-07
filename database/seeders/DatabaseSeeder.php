<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory(100)->create();
        //\App\Models\Blogpost::factory(100)->create();

        $this->call([
           // UserSeeder::class,
            //PermissionRoleTableSeeder::class,
            //PermissionsTableSeeder::class,
            //RolesTableSeeder::class,
            //RoleUserTableSeeder::class,
            blogPostSeeder::class,
        ]);

    }
}