<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("products")->insert([
            "name" => "Playstation 5",
            "price" => "500",
            "category" => "electronics",
            "description" => "Sony playstation 5 with 1TB SSD",
            "gallery" => "https://s.yimg.com/uu/api/res/1.2/Opj0_P1XtonVB2_8Z_B6xw--~B/aD0xMjAwO3c9MTgwMDthcHBpZD15dGFjaHlvbg--/https://s.yimg.com/os/creatr-uploaded-images/2020-11/1fa5a901-1fee-11eb-b6fd-ecc1bfdbf55f.cf.jpg"
        ]);
    }
}
