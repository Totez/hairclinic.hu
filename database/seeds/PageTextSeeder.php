<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageTextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        $texts = [
            "slogen" => [
                "key" => "home.slogen",
                "page" => "home",
                "name" => "Szlogen",
                "text" => "A szép és egészséges hajért fontos tudnod,<br>hogyan tápláld és kezeld megfelelően a hajadat",
            ],
            "hariclinic" => [
                "key" => "home.hc",
                "page" => "home",
                "name" => "Hairclic leírás",
                "text" => "Búzacsíraolajjal és aranyköles-kivonattal a haj táplálására a gyökereken keresztül.",
            ],
            "hariclinic_extra" => [
                "key" => "home.hc_extra",
                "page" => "home",
                "name" => "Hairclic Extra leírás",
                "text" => "Búzacsíraolajjal és aranyköles-kivonattal a haj táplálására a gyökereken keresztül.",
            ],
            "hariclinic_men" => [
                "key" => "home.hc_men",
                "page" => "home",
                "name" => "Hairclic Men leírás",
                "text" => "Búzacsíraolajjal és aranyköles-kivonattal a haj táplálására a gyökereken keresztül.",
            ],
        ];

        foreach ($texts as $key => $value) {
            DB::table("page_texts")->insert([
                "key" => $value["key"],
                "page" => $value["page"],
                "name" => $value["name"],
                "text" => $value["text"],
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ]);
        }

    }
}
