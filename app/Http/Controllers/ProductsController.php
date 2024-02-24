<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller {
    public function foodBeverage() {
        return view('fnb');
    }

    public function beautyHealth() {
        return view('beauty');
    }

    public function homeCare() {
        return view('homecare');
    }

    public function babyKid() {
        return view('babykid');
    }
}
