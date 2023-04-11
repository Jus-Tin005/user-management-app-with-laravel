<?php

namespace Database\Seeders;
use App\Feature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeaturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $features = [
            [
                'id' => 1,
                'name' => 'user',
            ],
            [
                'id' => 2,
                'name' => 'role',
            ],
            [
                'id' => 3,
                'name' => 'product',
            ],
            [
                'id' => 4,
                'name' => 'customer',
            ],
            [
                'id' => 5,
                'name' => 'sales',
            ],
        ];

        Feature::insert($features);
    }
}
