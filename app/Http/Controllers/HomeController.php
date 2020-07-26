<?php

namespace App\Http\Controllers;

use App\Entities\PageText;
use App\Entities\Product;
use Exception;
use GuzzleHttp\Client;

class HomeController extends AbstractController {

    public function hairclinic() {


        $price = "";
        try {
//            $crawler = \Goutte::request("GET",
//                "https://www.dm.hu/hair-clinic-extra-tabletta-p5999882020051.html",
//                ["verify" => false]);
            $crawler = \Goutte::request("GET", "https://shop.rossmann.hu/termek/hair-clinic-hajszepseg-kapszula-30-db");
            $crawler->filter('.regular-price .price')->each(function ($node) use (&$price) {
                $price = $node->text();
            });
        } catch(Exception $ex) {
            $price = Product::query()->where("key", "sampon")->first()->rossmann;
        }
        return response()->view("hairclinic", [
            "price" => $price
        ]);
    }

    public function goodToKnow() {

        $pageTexts = PageText::all()->keyBy("key");

        return response()->view("good-to-know", [
            "pageTexts" => $pageTexts
        ]);
    }
}
