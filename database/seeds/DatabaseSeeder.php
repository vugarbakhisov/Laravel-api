<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
         $this->call(CategoriesSeed::class);
         // $this->call(ProductSeed::class);
         $this->call(UserSeed::class);
    }
}
