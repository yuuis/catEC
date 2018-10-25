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
            "price" => 12000,
            "image" => "01.jpg",
            "description" => "1.5mのキャットタワーです",
        ]);
        DB::table("products")->insert ([
            "name" => "キャットタワー",
            "price" => 12000,
            "image" => "01.jpg",
            "description" => "1.5mのキャットタワーです",
        ]);
        DB::table("products")->insert ([
            "name" => "キャットタワー",
            "price" => 12000,
            "image" => "01.jpg",
            "description" => "1.5mのキャットタワーです",
        ]);
        DB::table("products")->insert ([
            "name" => "キャットタワー",
            "price" => 12000,
            "image" => "01.jpg",
            "description" => "1.5mのキャットタワーです",
        ]);
    }
}
