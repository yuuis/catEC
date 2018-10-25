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
            "name" => "necmuraneco",
            "email" => "neco@cat.com",
            "phone_number" => "02022222222",
            "address" => "公園",
        ]);
    }
}
