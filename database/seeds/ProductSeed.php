<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
class ProductSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i=0; $i<250;$i++){
            $faker = Faker::create();
            DB::table('products')->insert([
                'name' =>$faker->name,
                'price' => $faker->postcode,
                'description' =>$faker->country,
                'cat_id' => rand(1, 100)
               
            ]);


        }
    }
}



