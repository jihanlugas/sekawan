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
                'non_admin_price' => 25000,
                'admin_price' => 15000,
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
