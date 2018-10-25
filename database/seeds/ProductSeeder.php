<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("products")->insert ([
            "name" => "キャットタワー",
            "price" => 1200,
            "image" => "01.png",
            "description" => "5mのキャットタワーです",
        ]);
    }
}
