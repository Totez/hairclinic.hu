<?php

namespace App\Http\Controllers;

use App\Entities\PageText;
use App\Entities\Product;
use Exception;
use Goutte\Client as GoutteClient;
use Illuminate\Support\Arr;
use Symfony\Component\HttpClient\HttpClient;


class HomeController extends AbstractController {

    protected $httpClient;

    protected $goutte;

    public function __construct() {
        $this->httpClient = HttpClient::create(["verify_peer" => false]);

        $this->goutte = new GoutteClient($this->httpClient);
    }

    public function hairclinic() {

        $product_keys = ["dm_hc_30", "dm_hc_90", "rossmann_hc_30", "rossmann_hc_90"];

        $products = Product::query()->whereIn("key", $product_keys)->get()->keyBy("key");

        $products->each(function (Product $product) {
            $this->updateProductPrice($product);
        });

        return response()->view("hairclinic", [
            "products" => $products,
        ]);
    }

    protected function updateProductPrice(Product $product) {

        if($product->protocol === "HTTP") {
            try {
                $crawler = $this->goutte->request("GET", $product->url);
                $statusCode = $this->goutte->getResponse()->getStatusCode();

                if($statusCode == 200) {
                    $node = $crawler->filter($product->selector);
//                dd($crawler->filter("body")->html());
                    if($node->count() == 1 && $node->attr("content") != null) {
                        $product->price = intval($node->attr("content"));
                        $product->save();
                    }
                }

            } catch (Exception $e) {

            }
        }
        if($product->protocol === "JSON") {
            try {
                $response = $this->httpClient->request("GET", $product->url);

                if($response->getStatusCode() == 200) {
                    $product->price = intval(Arr::get(json_decode($response->getContent(), true), $product->selector));
                    $product->save();
                }

            } catch (Exception $e) {

            }
        }
    }

    protected function nbps_replace($string) {
        $content = preg_replace("/\x{00A0}|\s/u","", $string);
        return $content;
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
