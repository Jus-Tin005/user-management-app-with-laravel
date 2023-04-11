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
                'title' => 'user_management_access',
                'feature_id' => 1,
            ],
            [
                'id'    => 2,
                'title' => 'create',
                'feature_id' => 1,
            ],
            [
                'id'    => 3,
                'title' => 'edit',
                'feature_id' => 1,
            ],
            [
                'id'    => 4,
                'title' => 'show',
                'feature_id' => 1,
            ],
            [
                'id'    => 5,
                'title' => 'delete',
                'feature_id' => 1,
            ],
            [
                'id'    => 6,
                'title' => 'access',
                'feature_id' => 1,
            ],
            [
                'id'    => 7,
                'title' => 'create',
                'feature_id' => 1,
            ],
            [
                'id'    => 8,
                'title' => 'edit',
                'feature_id' => 1,
            ],
            [
                'id'    => 9,
                'title' => 'show',
                'feature_id' => 1,
            ],
            [
                'id'    => 10,
                'title' => 'delete',
                'feature_id' => 1,
            ],
            [
                'id'    => 11,
                'title' => 'access',
                'feature_id' => 1,
            ],
            [
                'id'    => 12,
                'title' => 'create',
                'feature_id' => 1,
            ],
            [
                'id'    => 13,
                'title' => 'edit',
                'feature_id' => 1,
            ],
            [
                'id'    => 14,
                'title' => 'show',
                'feature_id' => 1,
            ],
            [
                'id'    => 15,
                'title' => 'delete',
                'feature_id' => 1,
            ],
            [
                'id'    => 16,
                'title' => 'access',
                'feature_id' => 1,
            ],

            [
                'id'    => 17,
                'title' => 'profile_password_edit',
                'feature_id' => 1,
            ],
        ];

        Permission::insert($permissions);
    }
}
