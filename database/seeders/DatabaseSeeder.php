<?php
namespace Database\Seeders; 
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
<<<<<<< HEAD
            UsersTableSeeder::class,
            RolesTableSeeder::class,
            RoleUserTableSeeder::class,
            PermissionsTableSeeder::class,
            PermissionRoleTableSeeder::class,
            FeaturesTableSeeder::class,
            PermisssionFeatureTableSeeder::class,
=======
            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            PermissionRoleTableSeeder::class,
            UsersTableSeeder::class,
            RoleUserTableSeeder::class,
            FeaturesTableSeeder::class,
>>>>>>> b1c95138984331642b47d21530a00b3f3e4969c5
        ]);
    }
}
