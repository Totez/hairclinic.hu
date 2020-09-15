<?php


namespace App\Services;


use App\Entities\PageContent;
use App\Entities\PageImage;
use Illuminate\Support\Arr;

class PageImageService {

    /**
     * @param $page
     * @return array
     */
    public function getImagesForPage($page) {

        $pageImages = PageImage::query()->where("page", $page)->get();

        $page_images = array();

        $pageImages->each(function (PageImage $pageImage) use (&$page_images) {
            Arr::set($page_images, $pageImage->key, [
                "name" => $pageImage->name,
                "path" => $pageImage->path,
            ]);
        });

        return $page_images;
    }
}
