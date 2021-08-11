<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PromotionController extends Controller
{
    public function index()
    {
        return view('catalog.promotion.index');
    }

    public function show()
    {
        return view('catalog.promotion.show');
    }
}
