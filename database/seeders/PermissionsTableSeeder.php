<?php
namespace Database\Seeders;
use App\Permission;
use Illuminate\Database\Seeder;


class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'access', 
            ],
            [
                'id'    => 2,
                'title' => 'create',
            ],
            [
                'id'    => 3,
                'title' => 'edit',
            ],
            [
                'id'    => 4,
                'title' => 'show',
            ],
            [
                'id'    => 5,
                'title' => 'delete',
            ],
            [
                'id'    => 6,
                'title' => 'access',
            ],
            [
                'id'    => 7,
                'title' => 'create',
            ],
            [
                'id'    => 8,
                'title' => 'edit',
            ],
            [
                'id'    => 9,
                'title' => 'show',
            ],
            [
                'id'    => 10,
                'title' => 'delete',
            ],
            [
                'id'    => 11,
                'title' => 'access',
            ],
            [
                'id'    => 12,
                'title' => 'create',
            ],
            [
                'id'    => 13,
                'title' => 'edit',
            ],
            [
                'id'    => 14,
                'title' => 'show',
            ],
            [
                'id'    => 15,
                'title' => 'delete',
            ],
        ];

        Permission::insert($permissions);
    }
}
