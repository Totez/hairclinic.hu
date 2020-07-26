<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\AbstractController;

class AdminController extends AbstractController {

    public function home() {

        return response()->view("admin.home");
    }
}
