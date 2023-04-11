<?php
namespace Database\Seeders;
use App\Role;
use Illuminate\Database\Seeder;


class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            [
                'id'    => 1,
                'title' => 'Admin',
            ],
            [
                'id'    => 2,
                'title' => 'Super Admin',
            ],
            [
                'id'    => 3,
                'title' => 'User',
            ],
            [
                'id'    => 4,
                'title' => 'Accountant',
            ],
            [
                'id'    => 5,
                'title' => 'Cashier',
            ],
            [
                'id'    => 6,
                'title' => 'Manager',
            ],
        ];

        Role::insert($roles);
    }
}
