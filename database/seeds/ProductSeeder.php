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
        DB::table("products")->insert([
            "key" => "sampon",
            "name" => "HairClinic sampon",
            "package" => "20 db kiszerelés",
            "dm" => "1000",
            "rossmann" => "2000",
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);
    }
}
