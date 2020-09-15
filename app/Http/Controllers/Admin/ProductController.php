<?php


namespace App\Http\Controllers\Admin;


use App\Entities\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
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
            "products.*.shop_url" => "required|string",
            "products.*.update_url" => "required|string",
            "products.*.selector" => "required|string"
        ]);

        foreach ($validatedData["products"] as $productData) {

            $product = Product::query()->where("key", $productData["key"])->first();

            if(is_null($product)) {
                $product = new Product();
            }

            $product->name = $productData["name"];
            $product->price = $productData["price"];
            $product->shop_url = $productData["shop_url"];
            $product->update_url = $productData["update_url"];
            $product->selector = $productData["selector"];
            $product->save();
        }

        $request->session()->flash("success", "Termékek sikeresen elmentve.");

        return response()->redirectToRoute("admin.product.list");
    }

    public function selfUpdate(Request $request) {
        Artisan::command("product:update", function () {

        });

        $request->session()->flash("success", "Termékek sikeresen frissítve.");

        return redirect()->back();
    }
}
