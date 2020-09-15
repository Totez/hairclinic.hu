<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        $pageImages = [
            [
                "key" => "advice.advice.a1",
                "page" => "advice",
                "name" => "Tanács illusztráció",
                "path" => "storage/advice/a1.jpg"
            ],
            [
                "key" => "advice.advice.a2",
                "page" => "advice",
                "name" => "Tanács illusztráció",
                "path" => "storage/advice/a2.jpg"
            ],
            [
                "key" => "advice.advice.a3",
                "page" => "advice",
                "name" => "Tanács illusztráció",
                "path" => "storage/advice/a3.jpg"
            ],
            [
                "key" => "advice.advice.a4",
                "page" => "advice",
                "name" => "Tanács illusztráció",
                "path" => "storage/advice/a4.jpg"
            ],
            [
                "key" => "advice.advice.a5",
                "page" => "advice",
                "name" => "Tanács illusztráció",
                "path" => "storage/advice/a5.jpg"
            ]
        ];

        foreach ($pageImages as $pageImage) {
            DB::table("page_images")->insert([
                "key" => $pageImage["key"],
                "page" => $pageImage["page"],
                "name" => $pageImage["name"],
                "path" => $pageImage["path"],
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ]);
        }
    }
}
