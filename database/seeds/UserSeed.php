<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i<50;$i++){
            $faker = Faker::create();
            DB::table('users')->insert([
                'name'=>$faker->name,
                'email' =>$faker->email,
                'password'=> bcrypt(1234),
                'first_name' =>$faker->firstName,
                'last_name' =>$faker->lastName



            ]);
        }
    }
}
