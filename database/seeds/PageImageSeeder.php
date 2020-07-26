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

        DB::table("page_images")->insert([
            "key" => "home.img",
            "page" => "home",
            "name" => "Kezdőoldal kép",
            "path" => "storage/page_images/203-300x200.jpg",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
    }
}
