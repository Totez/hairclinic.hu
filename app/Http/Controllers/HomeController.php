<?php

namespace App\Http\Controllers;

use App\Entities\PageText;
use App\Entities\Product;
use Exception;
use Goutte\Client;
use Symfony\Component\HttpClient\HttpClient;


class HomeController extends AbstractController {

    protected $client;

    public function __construct() {
        $httpClient = HttpClient::create(["verify_peer" => false]);
        $this->client = new Client($httpClient);
    }

    public function hairclinic() {

        $products = Product::all();

        $price = [
            "dm" => [
                "hc_30" => $this->get_price_with_crawler('dm_hc_30'),
                "hc_90" => $this->get_price_with_crawler('dm_hc_90'),
                "hc_extra_27" => $this->get_price_with_crawler('dm_hc_extra_27'),
                "hc_men_60" => $this->get_price_with_crawler('dm_hc_men_60'),
            ],
            "rossmann" => [
                "hc_30" => $this->get_price_with_crawler('rossmann_hc_30'),
                "hc_90" => $this->get_price_with_crawler('rossmann_hc_90'),
                "hc_extra_27" => $this->get_price_with_crawler('rossmann_hc_extra_27'),
                "hc_men_60" => $this->get_price_with_crawler('rossmann_hc_men_60'),
            ],

        ];

        return response()->view("hairclinic", [
            "price" => $price,
            "products" => $products,
        ]);
    }

    public function get_price_with_crawler($product_key) {

        $product = Product::query()->where("key", $product_key)->first();

        try {
            $crawler = $this->client->request("GET", $product->url);
            $statusCode = $this->client->getResponse()->getStatusCode();
            
            if($statusCode == 200) {
                $crawler->filter($product->selector)->each(function ($node) use (&$price) {
                    $price = [intval($node->attr("content")), null];
                });
            } else {
                $price = [$product->price, $product->updated_at];
            }
            
        } catch (Exception $e) {
            $price = [$product->price, $product->updated_at];
        }
        if($price) return $price;
        else return [$product->price, $product->updated_at];
    }

    public function nbps_replace($string) {
        $string = htmlentities($string, null, 'utf-8');
        $content = str_replace("&nbsp;", "", $string);
        return html_entity_decode($content);
    }

    public function goodToKnow() {

        $pageTexts = PageText::all()->keyBy("key");

        return response()->view("good-to-know", [
            "pageTexts" => $pageTexts
        ]);
    }
    public function home() {

        $pageTexts = PageText::all()->keyBy("key");

        return response()->view("index", [
            "pageTexts" => $pageTexts
        ]);
    }
}
