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
                "key" => "advice.advice.a0",
                "page" => "advice",
                "name" => "Tanács illusztráció",
                "path" => "storage/advice/zsidro.png"
            ],
            [
                "key" => "advice.advice.a1",
                "page" => "advice",
                "name" => "Tanács illusztráció",
                "path" => "storage/advice/illustration-1.png"
            ],
            [
                "key" => "advice.advice.a2",
                "page" => "advice",
                "name" => "Tanács illusztráció",
                "path" => "storage/advice/illustration-2.png"
            ],
            [
                "key" => "advice.advice.a3",
                "page" => "advice",
                "name" => "Tanács illusztráció",
                "path" => "storage/advice/illustration-3.png"
            ],
            [
                "key" => "advice.advice.a4",
                "page" => "advice",
                "name" => "Tanács illusztráció",
                "path" => "storage/advice/illustration-4.png"
            ],
            [
                "key" => "advice.advice.a5",
                "page" => "advice",
                "name" => "Tanács illusztráció",
                "path" => "storage/advice/illustration-5.png"
            ],
            [
                "key" => "advice.advice.a6",
                "page" => "advice",
                "name" => "Tanács illusztráció",
                "path" => "storage/advice/illustration-5.png"
            ],
            [
                "key" => "advice.advice.a7",
                "page" => "advice",
                "name" => "Tanács illusztráció",
                "path" => "storage/advice/illustration-5.png"
            ],
            [
                "key" => "advice.advice.a8",
                "page" => "advice",
                "name" => "Tanács illusztráció",
                "path" => "storage/advice/illustration-5.png"
            ],
            [
                "key" => "advice.advice.a9",
                "page" => "advice",
                "name" => "Tanács illusztráció",
                "path" => "storage/advice/illustration-5.png"
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
