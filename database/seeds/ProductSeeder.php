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
            "name" => "Razer Gaming Laptop",
            "price" => "1000",
            "category" => "electronics",
            "description" => "Enjoy intel 11th gen powerful cpu",
            "gallery" => "https://www.hotspawn.com/app/uploads/2021/03/laptop_razer_blade_header.jpg"
        ]);
    }
}
