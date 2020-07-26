<?php


namespace App\Http\Controllers\Admin;


use App\Entities\Product;
use Illuminate\Http\Request;
use MongoDB\Driver\Session;

class ProductController extends AdminController {

    public function list() {

        $products = Product::all()->keyBy("key");

        return response()->view("admin.products", [
            "products" => $products
        ]);

    }

    public function update(Request $request) {

        $validatedData = $this->validate($request, [
            "products" => "required|array",
            "products.*.key" => "required|string|max:255",
            "products.*.name" => "required|string|max:255",
            "products.*.package" => "required|string|max:255",
            "products.*.dm" => "required|numeric",
            "products.*.rossmann" => "required|numeric"
        ]);

        foreach ($validatedData["products"] as $productData) {

            $product = Product::query()->where("key", $productData["key"])->first();

            if(is_null($product)) {
                $product = new Product();
            }

            $product->name = $productData["name"];
            $product->package = $productData["package"];
            $product->dm = $productData["dm"];
            $product->rossmann = $productData["rossmann"];
            $product->save();
        }

        $request->session()->flash("success", "Termékek sikeresen elmentve.");

        return response()->redirectToRoute("admin.product.list");
    }
}
