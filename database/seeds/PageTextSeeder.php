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

        DB::table("page_texts")->insert([
            "key" => "home.welcome",
            "page" => "home",
            "name" => "Kezdőoldal köszöntés",
            "text" => "Üdv, ez itt a HairClinic oldala.",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
    }
}
