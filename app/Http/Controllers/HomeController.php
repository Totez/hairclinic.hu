<?php

namespace App\Http\Controllers;

use App\Entities\PageContent;
use App\Entities\Product;
use App\Services\PageContentService;


class HomeController extends AbstractController {

    /**
     * @var PageContentService
     */
    protected $pageContentService;

    /**
     * HomeController constructor.
     * @param PageContentService $pageContentService
     */
    public function __construct(PageContentService $pageContentService) {
        $this->pageContentService = $pageContentService;
    }

    public function home() {


        $pageContents = $this->pageContentService->getContentsForPage("home");

        return response()->view("index", [
            "page_contents" => $pageContents
        ]);
    }

    public function hairclinic() {

        $product_keys = ["dm_hc_30", "dm_hc_90", "rossmann_hc_30", "rossmann_hc_90"];

        $products = Product::query()->whereIn("key", $product_keys)->get()->keyBy("key");

        $product_infos = $products->map(function (Product $product) {
           return array(
               "price" => $product->price,
               "url" => $product->shop_url,
               "is_outdated" => $product->updated_at->diffInDays() >= 1,
               "updated_at" => $product->updated_at
           );
        });

        $pageContents = $this->pageContentService->getContentsForPage("hairclinic");

        return response()->view("hairclinic", [
            "products" => $product_infos,
            "page_contents" => $pageContents
        ]);
    }

    public function hairclinicExtra() {

        $product_keys = ["dm_hc_extra", "rossmann_hc_extra"];

        $products = Product::query()->whereIn("key", $product_keys)->get()->keyBy("key");

        $product_infos = $products->map(function (Product $product) {
            return array(
                "price" => $product->price,
                "url" => $product->shop_url,
                "is_outdated" => $product->updated_at->diffInDays() >= 1,
                "updated_at" => $product->updated_at
            );
        });

        $pageContents = $this->pageContentService->getContentsForPage("hairclinic_extra");

        return response()->view("hairclinic-extra", [
            "products" => $product_infos,
            "page_contents" => $pageContents
        ]);
    }

    public function hairclinicMen() {

        $product_keys = ["dm_hc_men", "rossmann_hc_men"];

        $products = Product::query()->whereIn("key", $product_keys)->get()->keyBy("key");

        $product_infos = $products->map(function (Product $product) {
            return array(
                "price" => $product->price,
                "url" => $product->shop_url,
                "is_outdated" => $product->updated_at->diffInDays() >= 1,
                "updated_at" => $product->updated_at
            );
        });

        $pageContents = $this->pageContentService->getContentsForPage("hairclinic_men");

        return response()->view("hairclinic-men", [
            "products" => $product_infos,
            "page_contents" => $pageContents
        ]);
    }

    public function goodToKnow() {

        $pageContents = $this->pageContentService->getContentsForPage("good_to_know");

        return response()->view("good-to-know", [
            "page_contents" => $pageContents
        ]);
    }
}
