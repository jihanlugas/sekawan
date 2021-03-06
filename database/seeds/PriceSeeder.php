<?php

use App\Price;
use Illuminate\Database\Seeder;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $aarPrices = [
            [
                'name' => 'Standart',
                'non_admin_price' => \App\User::USER_PRICE_SEEDER_NON_ADMIN,
                'admin_price' => \App\User::USER_PRICE_SEEDER_ADMIN,
                'is_active' => 1,
            ],
        ];

        foreach ($aarPrices as $i => $price){
            $mPrice = new Price();
            $mPrice->name = $price['name'];
            $mPrice->non_admin_price = $price['non_admin_price'];
            $mPrice->admin_price = $price['admin_price'];
            $mPrice->is_active = $price['is_active'];
            $mPrice->save();
        }
    }
}
