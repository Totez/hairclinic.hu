<?php


namespace App\Entities;


use Illuminate\Database\Eloquent\Model;

class PageImage extends Model {

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "page_images";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "key",
        "page",
        "name",
        "path"
    ];
}
