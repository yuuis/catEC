<?php

use Illuminate\Database\Seeder;

class PurchaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("purchases")->insert ([
            "user_id" => 1,
            "product_id" => 1
        ]);
        DB::table("purchases")->insert ([
            "user_id" => 2,
            "product_id" => 1
        ]);
        DB::table("purchases")->insert ([
            "user_id" => 3,
            "product_id" => 1
        ]);
    }
}
