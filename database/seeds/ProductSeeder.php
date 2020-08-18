<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        $products = [
            "rossmann_hc_30" => ['Hairclinic', '[itemProp="price"]', "HTTP", "https://shop.rossmann.hu/termek/hair-clinic-hajszepseg-kapszula-30-db"],
            "rossmann_hc_90" => ['Hairclinic', '[itemProp="price"]', "HTTP", "https://shop.rossmann.hu/termek/hairclinic-haj-kapszula-90-db"],
            "rossmann_hc_extra_27" => ['Hairclinic Extra', '[itemProp="price"]', "HTTP", "https://shop.rossmann.hu/termek/hair-clinic-extra-kapszula-27-db"],
            "rossmann_hc_men_60" => ['Hairclinic Men', '[itemProp="price"]', "HTTP", "https://shop.rossmann.hu/termek/hairclinic-men-etrend-kiegeszito-hialuronsavval-koffeinnel-szabalpalma-kivonattal-60-db-32-4-g"],
            "dm_hc_30" => ["Hairclinic", "0.price", "JSON", "https://products.dm.de/product/hu/products/gtins/5999882020006?view=details"],
            "dm_hc_90" => ["Hairclinic", "0.price", "JSON", "https://products.dm.de/product/hu/products/gtins/5999882020099?view=details"],
            "dm_hc_extra_27" => ["Hairclinic Extra", "0.price","JSON",  "https://products.dm.de/product/hu/products/gtins/5999882020051?view=details"],
            "dm_hc_men_60" => ["Hairclinic Men", "0.price", "JSON", "https://products.dm.de/product/hu/products/gtins/5999882020259?view=details"],
        ];


        foreach ($products as $productkey => $product) {
            DB::table("products")->insert([
                "key" => $productkey,
                "name" => $product[0],
                "price" => "2000",
                "url" => $product[3],
                "selector" => $product[1],
                "protocol" => $product[2],
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]);
        }
    }
}
