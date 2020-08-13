<?php


namespace App\Http\Controllers\Admin;


use App\Entities\PageText;
use App\Http\Controllers\AbstractController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PageTextController extends AbstractController {

    public function list() {

        $pageTexts = PageText::all()->keyBy("key");

        return response()->view("admin.page.texts", [
            "pageTexts" => $pageTexts
        ]);
    }

    public function update(Request $request) {

        $validatedData = $request->validate([
            "page_texts.*.key" => "required|string|max:255",
            "page_texts.*.page" => "required|string|max:255",
            "page_texts.*.name" => "required|string|max:255",
            "page_texts.*.text" => "required|string"
        ]);

        foreach ($validatedData["page_texts"] as $page_text) {

            $pageText = PageText::query()->where("key", $page_text["key"])->first();

            if(is_null($pageText)) {
                $pageText = new PageText();
            }

            $pageText->page = $page_text["page"];
            $pageText->name = $page_text["name"];
            $pageText->text = $page_text["text"];
            $pageText->save();
        }

        $request->session()->flash("success", "Szövegek sikeresen elmentve.");

        return response()->redirectToRoute("admin.page.text.list");
    }
}
