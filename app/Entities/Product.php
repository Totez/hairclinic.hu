<?php


namespace App\Entities;


use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    const PROTOCOL_HTTP = "HTTP";
    const PROTOCOL_JSON = "JSON";

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "products";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "key",
        "name",
        "url",
        "selector",
        "protocol"
    ];
    protected $casts = [
        "price" => "int"
    ];
}
