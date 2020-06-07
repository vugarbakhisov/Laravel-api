<?php

use Illuminate\Database\Seeder;
use App\Models\Api\Categories;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class testseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i=0; $i<30; $i++){


        Categories::insert([
            'name'=>$faker->name,
            'status' =>1
        ]);
    }
}
