<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class StudentSeeder extends Seeder
{

    /**
     * 
     * @return void
     */
    public function run(): void
    {
        $faker = Faker::create();
        $data =[];
        for($i = 4; $i < 50; $i++){
            $data[]= [
                // ['id' => 1, 'name' => 'Sri', 'score' => 90],
                // ['id' => 1, 'name' => 'Sri', 'score' => 90],
               'id' => $i + 1, 'name' => $faker->name(), 'score' => $faker->numberBetween(70, 100)
            ];
        };
        DB::table('student')->insert($data);
    }
}   