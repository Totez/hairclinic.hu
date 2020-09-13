<?php


namespace App\Entities;


use Illuminate\Database\Eloquent\Model;

class PageContent extends Model {

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "page_contents";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "key",
        "page",
        "title",
        "content"
    ];

}
