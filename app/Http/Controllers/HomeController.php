<?php

namespace App\Http\Controllers;

use App\Entities\PageContent;
use App\Entities\Product;
use App\Services\PageContentService;
use App\Services\PageImageService;


class HomeController extends AbstractController {

    /**
     * @var PageContentService
     */
    protected $pageContentService;

    /**
     * @var PageImageService
     */
    protected $pageImageService;

    /**
     * HomeController constructor.
     * @param PageContentService $pageContentService
     * @param PageImageService $pageImageService
     */
    public function __construct(PageContentService $pageContentService, PageImageService $pageImageService) {
        $this->pageContentService = $pageContentService;
        $this->pageImageService = $pageImageService;
    }


    public function home() {


        $pageContents = $this->pageContentService->getContentsForPage("home");
        $product_keys = ["dm_hc_30", "dm_hc_90", "rossmann_hc_30", "rossmann_hc_90", "dm_hc_men", "rossmann_hc_men", "dm_hc_extra", "rossmann_hc_extra"];

        $products = Product::query()->whereIn("key", $product_keys)->get()->keyBy("key");

        $product_infos = $products->map(function (Product $product) {
            return array(
                "price" => $product->price,
                "url" => $product->shop_url,
                "is_outdated" => $product->updated_at->diffInDays() >= 1,
                "updated_at" => $product->updated_at
            );
        });

        return response()->view("index", [
            "products" => $product_infos,
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

        $product_keys = ["dm_hc_30", "dm_hc_90", "rossmann_hc_30", "rossmann_hc_90", "dm_hc_men", "rossmann_hc_men", "dm_hc_extra", "rossmann_hc_extra"];

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

        $product_keys = ["dm_hc_30", "dm_hc_90", "rossmann_hc_30", "rossmann_hc_90", "dm_hc_men", "rossmann_hc_men", "dm_hc_extra", "rossmann_hc_extra"];

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

        $product_keys = ["dm_hc_30", "dm_hc_90", "rossmann_hc_30", "rossmann_hc_90", "dm_hc_men", "rossmann_hc_men", "dm_hc_extra", "rossmann_hc_extra"];
        $products = Product::query()->whereIn("key", $product_keys)->get()->keyBy("key");

        $product_infos = $products->map(function (Product $product) {
            return array(
                "price" => $product->price,
                "url" => $product->shop_url,
                "is_outdated" => $product->updated_at->diffInDays() >= 1,
                "updated_at" => $product->updated_at
            );
        });

        return response()->view("good-to-know", [
            "products" => $product_infos,
            "page_contents" => $pageContents
        ]);
    }

    public function advice() {

        $pageContents = $this->pageContentService->getContentsForPage("advice");
        $pageImages = $this->pageImageService->getImagesForPage("advice");
        $product_keys = ["dm_hc_30", "dm_hc_90", "rossmann_hc_30", "rossmann_hc_90", "dm_hc_men", "rossmann_hc_men", "dm_hc_extra", "rossmann_hc_extra"];

        $products = Product::query()->whereIn("key", $product_keys)->get()->keyBy("key");

        $product_infos = $products->map(function (Product $product) {
            return array(
                "price" => $product->price,
                "url" => $product->shop_url,
                "is_outdated" => $product->updated_at->diffInDays() >= 1,
                "updated_at" => $product->updated_at
            );
        });

        return response()->view("advice-of-zsidro", [
            "products" => $product_infos,
            "page_contents" => $pageContents,
            "page_images" => $pageImages
        ]);
    }

    public function buy() {
        $product_keys = ["dm_hc_30", "dm_hc_90", "rossmann_hc_30", "rossmann_hc_90", "dm_hc_extra", "rossmann_hc_extra", "dm_hc_men", "rossmann_hc_men"];

        $products = Product::query()->whereIn("key", $product_keys)->get()->keyBy("key");

        $product_infos = $products->map(function (Product $product) {
            return array(
                "price" => $product->price,
                "url" => $product->shop_url,
                "is_outdated" => $product->updated_at->diffInDays() >= 1,
                "updated_at" => $product->updated_at
            );
        });

        $lastUpdated = $products->min(function (Product $product) {
            return $product->updated_at;
        });

        return response()->view("buy", [
            "products" => $product_infos,
            "last_updated" => $lastUpdated
        ]);
    }
}
