<?php


namespace App\Http\Controllers\Admin;


use App\Entities\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ProductController extends AdminController {

    public function list() {

        $products = Product::all()->keyBy("key");

        return response()->view("admin.products", [
            "products" => $products
        ]);

    }

    public function update(Request $request) {

        $validatedData = $request->validate([
            "products.*.key" => "required|string|max:255",
            "products.*.name" => "required|string|max:255",
            "products.*.price" => "required|numeric",
            "products.*.url" => "required|string",
            "products.*.selector" => "required|string"
        ]);

        foreach ($validatedData["products"] as $productData) {

            $product = Product::query()->where("key", $productData["key"])->first();

            if(is_null($product)) {
                $product = new Product();
            }

            $product->name = $productData["name"];
            $product->price = $productData["price"];
            $product->url = $productData["url"];
            $product->selector = $productData["selector"];
            $product->save();
        }

        $request->session()->flash("success", "Termékek sikeresen elmentve.");

        return response()->redirectToRoute("admin.product.list");
    }
}
