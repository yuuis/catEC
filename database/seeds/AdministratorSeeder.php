<?php

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("administrators")->insert ([
            "password" => hash("sha512", hash("sha512", "hogefugapiyo"))
        ]);
    }
}
