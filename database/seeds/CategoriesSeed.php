<?php

use App\Models\Api\Categories;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;


class CategoriesSeed extends Seeder
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
        DB::table('product_categories')->insert(['product_id' =>1,'categories_id'=>1]);
        DB::table('product_categories')->insert(['product_id' =>1,'categories_id'=>2]);
        DB::table('product_categories')->insert(['product_id' =>2,'categories_id'=>1]);
        DB::table('product_categories')->insert(['product_id' =>2,'categories_id'=>2]);
        DB::table('product_categories')->insert(['product_id' =>2,'categories_id'=>3]);



    }
}
