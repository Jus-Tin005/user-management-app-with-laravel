<?php
namespace Database\Seeders;
use App\User;
use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'khuntun',
                'email'          => 'khuntun984@gmail.com',
                'password'       => bcrypt('khuntun984'),
                'remember_token' => null,
            ],
            [
                'id'             => 2,
                'name'           => 'superadmin',
                'email'          => 'superadmin777@gmail.com',
                'password'       => bcrypt('superadmin777'),
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
