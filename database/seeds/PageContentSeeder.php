<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        $page_contents = [
            [
                "key" => "home.slogen",
                "page" => "home",
                "title" => "Szlogen",
                "content" => "<i>A szép és egészséges hajért fontos tudnod,<br>hogyan tápláld és kezeld megfelelően a hajadat</i>"
            ],
            [
                "key" => "home.hc",
                "page" => "home",
                "title" => "hc",
                "content" => "Búzacsíraolajjal és aranyköles-kivonattal a haj táplálására a gyökereken keresztül."
            ],
            [
                "key" => "hairclinic.description",
                "page" => "hairclinic",
                "title" => "Leírás",
                "content" => "Innovatív hatóanyag-kombináció a gyönyörű, egészséges hajért. Búzacsíraolajjal és aranyköles-kivonattal a haj táplálására a gyökereken keresztül. A HairClinic® kapszula intenzíven táplálja a hajhagymákat. Egyedülálló hatóanyag-kombinációja értékes tápanyagokkal látja el a hajhagymákat és rajtuk keresztül a hajszálakat, ezzel elősegítve a haj egészségének megőrzését. A különleges lágyzselatin kapszulának köszönhetően a HairClinic® összetevői gyorsan felszívódnak, és a véráramon keresztül eljutnak a hajszálak gyökereihez.",
            ],
            [
                "key" => "hairclinic.ingredients.aranykoles",
                "page" => "hairclinic",
                "title" => "Aranyköles-kivonat",
                "content" => "Az aranyköles egyike a legmagasabb ásványianyag-tartalmú gabonaféléknek. Emellett számos vitamint, fontos nyomelemet és aminosavat is tartalmaz. A hántolatlan aranykölesből különleges eljárással nyerik a teljes értékű aranyköles kivonatot.",
            ],
            [
                "key" => "hairclinic.ingredients.buzacsira",
                "page" => "hairclinic",
                "title" => "Búzacsíraolaj",
                "content" => "A búzacsíraolaj igen értékes olaj, melyet a búzaszemek csírájának sajtolása útján nyernek. Többszörösen telítetlen zsírsavakat tartalmaz",
            ]
        ];

        if (($handle = fopen(storage_path("app/page_contents.csv"), "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, "|")) !== FALSE) {
                $page_contents[] = [
                    "key" => $data[0],
                    "page" => $data[1],
                    "title" => $data[2],
                    "content" => $data[3]
                ];
            }
            fclose($handle);

            foreach ($page_contents as $value) {
                DB::table("page_contents")->insert([
                    "key" => $value["key"],
                    "page" => $value["page"],
                    "title" => $value["title"],
                    "content" => $value["content"],
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ]);
            }
        }

    }
}
