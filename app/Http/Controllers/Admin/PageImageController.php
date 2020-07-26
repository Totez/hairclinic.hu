<?php


namespace App\Http\Controllers\Admin;


use App\Entities\PageImage;
use App\Http\Controllers\AbstractController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PageImageController extends AbstractController {

    public function list() {

        $pageImages = PageImage::all()->keyBy("key");

        return response()->view("admin.page.images", [
            "pageImages" => $pageImages
        ]);
    }

    public function update(Request $request) {

        $validatedData = $this->validate($request, [
            "page_images" => "required|array",
            "page_images.*.key" => "required|string|max:255",
            "page_images.*.page" => "required|string|max:255",
            "page_images.*.name" => "required|string|max:255",
//            "page_images.*.file" => "file"
        ]);

        foreach ($validatedData["page_images"] as $index => $page_image) {

            $pageImage = PageImage::query()->where("key", $page_image["key"])->first();

            if(is_null($pageImage)) {
                $pageImage = new PageImage();
            }

            $pageImage->page = $page_image["page"];
            $pageImage->name = $page_image["name"];

            if($request->hasFile("page_images." . $index . ".file")) {
                $image = $request->file("page_images." . $index . ".file");
                $path = $image->storeAs("page_images", $page_image["key"] . ".jpg", "public");
                $pageImage->path = Storage::url($path);
            }

            $pageImage->save();
        }

        $request->session()->flash("success", "Képek sikeresen elmentve.");

        return response()->redirectToRoute("admin.page.image.list");
    }
}
