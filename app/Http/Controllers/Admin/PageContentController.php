<?php


namespace App\Http\Controllers\Admin;


use App\Entities\PageContent;
use App\Http\Controllers\AbstractController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PageContentController extends AbstractController {

    public function list() {

        $pageContents = PageContent::all()->keyBy("key");

        return response()->view("admin.page.contents", [
            "page_contents" => $pageContents
        ]);
    }

    public function update(Request $request) {

        $validatedData = $request->validate([
            "page_contents.*.key" => "required|string|max:255",
            "page_contents.*.page" => "required|string|max:255",
            "page_contents.*.title" => "required|string|max:255",
            "page_contents.*.content" => "required|string"
        ]);

        foreach ($validatedData["page_contents"] as $page_content) {

            $pageContent = PageContent::query()->where("key", $page_content["key"])->first();

            if(is_null($pageContent)) {
                $pageContent = new PageContent();
            }

            $pageContent->page = $page_content["page"];
            $pageContent->title = $page_content["title"];
            $pageContent->content = $page_content["content"];
            $pageContent->save();
        }

        $request->session()->flash("success", "Tartalmak sikeresen elmentve.");

        return response()->redirectToRoute("admin.page.text.list");
    }
}
