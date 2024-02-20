<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        // Permission::create(['name' => 'create-articles']);
        // Permission::create(['name' => 'edit-articles']);
        // Permission::create(['name' => 'delete-articles']);
        // Permission::create(['name' => 'approve-comments']);
        // Permission::create(['name' => 'delete-comments']);
       
        //$role1 = Role::create(['name' => 'super-admin']);
         //$role2 = Role::create(['name' => 'user']);
        // $role2 = Role::create(['name' => 'manager']);
        // $role2->givePermissionTo('create-articles');
        // $role2->givePermissionTo('approve-comments');
        // $role2->givePermissionTo('delete-comments');
        // $role2->givePermissionTo('publish-articles');
        // $role2->givePermissionTo('delete-articles');   
   
        // $user = \App\Models\User::factory()->create([
        //     'name' => 'admin',
        //     'email' => 'admin@example.com',
        //     'password' => Hash::make('password'),
        // ])->givePermissionTo(Permission::all());
        // $user->assignRole($role1);

        // $user = \App\Models\User::factory()->create([
        //     'name' => 'user',
        //     'email' => 'user@example.com',
        //     'password' => Hash::make('password'),
        // ]);

        // $user->assignRole($role2);

        // $user = \App\Models\User::factory()->create([
        //     'name' => 'manager',
        //     'email' => 'manager@example.com',
        //     'password' => Hash::make('password'),
        // ]);
        // $user->assignRole($role2);
    }
}