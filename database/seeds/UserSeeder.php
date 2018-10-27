<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert ([
            "name" => "猫村ねこ",
            "email" => "neco@cat.com",
            "phone_number" => "02022222222",
            "address" => "東京都港区の家",
        ]);
        DB::table("users")->insert ([
            "name" => "マロン",
            "email" => "maron@neco.com",
            "phone_number" => "02022220000",
            "address" => "東京都豊島区の公園",
        ]);
        DB::table("users")->insert ([
            "name" => "ルナ",
            "email" => "luna@neco.com",
            "phone_number" => "02022220000",
            "address" => "東京都渋谷区のビル",
        ]);
    }
}
