<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach(range(1,10) as $value){
            DB::table('employees')->insert([
                'name'=>$faker->name(),
                'city'=>$faker->city(),
                'salary'=>$faker->randomFloat(2),
            ]);
        }
    }
}
