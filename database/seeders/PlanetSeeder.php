<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            [
                'name' => '水星',
                'english_name' => 'MERCURY',
                'radius' => 2439,
                'weight' => 3310,
            ],
            [
                'name' => '金星',
                'english_name' => 'VENUS',
                'radius' => 6052,
                'weight' => 48700,
            ],
            [
                'name' => '地球',
                'english_name' => 'EARTH',
                'radius' => 6378,
                'weight' => 59760,
            ],
            [
                'name' => '火星',
                'english_name' => 'MARS',
                'radius' => 3397,
                'weight' => 6420,
            ],
            [
                'name' => '木星',
                'english_name' => 'JUPITER',
                'radius' => 71492,
                'weight' => 18993500,
            ],
            [
                'name' => '土星',
                'english_name' => 'SATURN',
                'radius' => 60268,
                'weight' => 5685980,
            ],
            [
                'name' => '天王星',
                'english_name' => 'URANUS',
                'radius' => 25559,
                'weight' => 868910,
            ],
            [
                'name' => '海王星',
                'english_name' => 'NEPTUNE',
                'radius' => 24764,
                'weight' => 1029660,
            ],
            [
                'name' => '金星',
                'english_name' => 'VENUS',
                'radius' => 6052,
                'weight' => 48700,
            ]
        ];
        DB::table('planets')->insert($param);
    }
}
