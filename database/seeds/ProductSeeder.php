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
            [
                "key" => "rossmann_hc_30",
                "name" => 'Hairclinic 30db (Rossmann)',
                "shop_url" => "https://shop.rossmann.hu/termek/hair-clinic-hajszepseg-kapszula-30-db",
                "update_url" => "https://shop.rossmann.hu/termek/hair-clinic-hajszepseg-kapszula-30-db",
                "selector" => '[itemProp="price"]',
                "protocol" => "HTTP",
            ],
            [
                "key" => "rossmann_hc_90",
                "name" => 'Hairclinic 90db (Rossmann)',
                "shop_url" => "https://shop.rossmann.hu/termek/hairclinic-haj-kapszula-90-db",
                "update_url" => "https://shop.rossmann.hu/termek/hairclinic-haj-kapszula-90-db",
                "selector" => '[itemProp="price"]',
                "protocol" => "HTTP",
            ],
            [
                "key" => "rossmann_hc_extra",
                "name" => 'Hairclinic Extra (Rossmann)',
                "shop_url" => "https://shop.rossmann.hu/termek/hair-clinic-extra-kapszula-27-db",
                "update_url" => "https://shop.rossmann.hu/termek/hair-clinic-extra-kapszula-27-db",
                "selector" => '[itemProp="price"]',
                "protocol" => "HTTP",
            ],
            [
                "key" => "rossmann_hc_men",
                "name" => 'Hairclinic Men (Rossmann)',
                "shop_url" => "https://shop.rossmann.hu/termek/hairclinic-men-etrend-kiegeszito-hialuronsavval-koffeinnel-szabalpalma-kivonattal-60-db-32-4-g",
                "update_url" => "https://shop.rossmann.hu/termek/hairclinic-men-etrend-kiegeszito-hialuronsavval-koffeinnel-szabalpalma-kivonattal-60-db-32-4-g",
                "selector" => '[itemProp="price"]',
                "protocol" => "HTTP",
            ],
            [
                "key" => "dm_hc_30",
                "name" => 'Hairclinic 30db (DM)',
                "shop_url" => "https://www.dm.hu/hair-clinic-men-kapszula-p5999882020006.html",
                "update_url" => "https://products.dm.de/product/hu/products/gtins/5999882020006?view=details",
                "selector" => "0.price",
                "protocol" => "JSON",
            ],
            [
                "key" => "dm_hc_90",
                "name" => 'Hairclinic 90db (DM)',
                "shop_url" => "https://www.dm.hu/hair-clinic-men-kapszula-p5999882020099.html",
                "update_url" => "https://products.dm.de/product/hu/products/gtins/5999882020099?view=details",
                "selector" => "0.price",
                "protocol" => "JSON",
            ],
            [
                "key" => "dm_hc_extra",
                "name" => 'Hairclinic Extra',
                "shop_url" => "https://www.dm.hu/hair-clinic-men-kapszula-p5999882020051.html",
                "update_url" => "https://products.dm.de/product/hu/products/gtins/5999882020051?view=details",
                "selector" => "0.price",
                "protocol" => "JSON",
            ],
            [
                "key" => "dm_hc_men",
                "name" => 'Hairclinic Men',
                "shop_url" => "https://www.dm.hu/hair-clinic-men-kapszula-p5999882020259.html",
                "update_url" => "https://products.dm.de/product/hu/products/gtins/5999882020259?view=details",
                "selector" => "0.price",
                "protocol" => "JSON",
            ]
        ];


        foreach ($products as $product) {
            DB::table("products")->insert([
                "key" => $product["key"],
                "name" => $product["name"],
                "price" => "2000",
                "shop_url" => $product["shop_url"],
                "update_url" => $product["update_url"],
                "selector" => $product["selector"],
                "protocol" => $product["protocol"],
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]);
        }
    }
}
