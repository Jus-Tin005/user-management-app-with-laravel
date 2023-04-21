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
<<<<<<< HEAD
                'title' => 'access', 
=======
                'title' => 'user_management_access',
                'feature_id' => 1,
>>>>>>> b1c95138984331642b47d21530a00b3f3e4969c5
            ],
            [
                'id'    => 2,
                'title' => 'create',
<<<<<<< HEAD
=======
                'feature_id' => 1,
>>>>>>> b1c95138984331642b47d21530a00b3f3e4969c5
            ],
            [
                'id'    => 3,
                'title' => 'edit',
<<<<<<< HEAD
=======
                'feature_id' => 1,
>>>>>>> b1c95138984331642b47d21530a00b3f3e4969c5
            ],
            [
                'id'    => 4,
                'title' => 'show',
<<<<<<< HEAD
=======
                'feature_id' => 1,
>>>>>>> b1c95138984331642b47d21530a00b3f3e4969c5
            ],
            [
                'id'    => 5,
                'title' => 'delete',
<<<<<<< HEAD
=======
                'feature_id' => 1,
>>>>>>> b1c95138984331642b47d21530a00b3f3e4969c5
            ],
            [
                'id'    => 6,
                'title' => 'access',
<<<<<<< HEAD
=======
                'feature_id' => 1,
>>>>>>> b1c95138984331642b47d21530a00b3f3e4969c5
            ],
            [
                'id'    => 7,
                'title' => 'create',
<<<<<<< HEAD
=======
                'feature_id' => 1,
>>>>>>> b1c95138984331642b47d21530a00b3f3e4969c5
            ],
            [
                'id'    => 8,
                'title' => 'edit',
<<<<<<< HEAD
=======
                'feature_id' => 1,
>>>>>>> b1c95138984331642b47d21530a00b3f3e4969c5
            ],
            [
                'id'    => 9,
                'title' => 'show',
<<<<<<< HEAD
=======
                'feature_id' => 1,
>>>>>>> b1c95138984331642b47d21530a00b3f3e4969c5
            ],
            [
                'id'    => 10,
                'title' => 'delete',
<<<<<<< HEAD
=======
                'feature_id' => 1,
>>>>>>> b1c95138984331642b47d21530a00b3f3e4969c5
            ],
            [
                'id'    => 11,
                'title' => 'access',
<<<<<<< HEAD
=======
                'feature_id' => 1,
>>>>>>> b1c95138984331642b47d21530a00b3f3e4969c5
            ],
            [
                'id'    => 12,
                'title' => 'create',
<<<<<<< HEAD
=======
                'feature_id' => 1,
>>>>>>> b1c95138984331642b47d21530a00b3f3e4969c5
            ],
            [
                'id'    => 13,
                'title' => 'edit',
<<<<<<< HEAD
=======
                'feature_id' => 1,
>>>>>>> b1c95138984331642b47d21530a00b3f3e4969c5
            ],
            [
                'id'    => 14,
                'title' => 'show',
<<<<<<< HEAD
=======
                'feature_id' => 1,
>>>>>>> b1c95138984331642b47d21530a00b3f3e4969c5
            ],
            [
                'id'    => 15,
                'title' => 'delete',
<<<<<<< HEAD
=======
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
>>>>>>> b1c95138984331642b47d21530a00b3f3e4969c5
            ],
        ];

        Permission::insert($permissions);
    }
}
