<?php


namespace App\Services;


use App\Entities\PageContent;
use Illuminate\Support\Arr;

class PageContentService {

    public function getContentsForPage($page) {

        $pageContents = PageContent::query()->where("page", $page)->get();

        $page_contents = array();

        $pageContents->each(function (PageContent $pageContent) use (&$page_contents) {
            Arr::set($page_contents, $pageContent->key, [
                "title" => $pageContent->title,
                "content" => $pageContent->content,
            ]);
        });

        return $page_contents;
    }
}
