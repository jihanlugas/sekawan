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
        // $this->call(UserSeeder::class);
         $this->call(BankSeeder::class);
         $this->call(PriceSeeder::class);
         $this->call(UserSeeder::class);
         $this->call(UsertreeSeeder::class);
    }
}
