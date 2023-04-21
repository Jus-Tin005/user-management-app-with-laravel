<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\PermissionFeature;


class PermisssionFeatureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $permissionFeature = [
                [
                    'feature_id' => 1,
                    'permission_id' => 1,
                ],
                [
                    'feature_id' => 1,
                    'permission_id' => 2,
                ],
                [
                    'feature_id' => 1,
                    'permission_id' => 3,
                ],
                [
                    'feature_id' => 1,
                    'permission_id' => 4,
                ],
                [
                    'feature_id' => 1,
                    'permission_id' => 5,
                ],
                [
                    'feature_id' => 2,
                    'permission_id' => 1,
                ],
                [
                    'feature_id' => 2,
                    'permission_id' => 2,
                ],
                [
                    'feature_id' => 2,
                    'permission_id' => 3,
                ],
                [
                    'feature_id' => 2,
                    'permission_id' => 4,
                ],
                [
                    'feature_id' => 2,
                    'permission_id' => 5,
                ],
            ];
            PermissionFeature::insert($permissionFeature);
    }
}
