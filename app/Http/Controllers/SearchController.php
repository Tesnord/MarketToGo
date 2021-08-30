<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function show(Request $request)
    {
        $string = $request->input('search');
        $products = $this->requestHelper->getRequest('search/'.$string);
        // dd($products);
        // $file = fopen('search.json','w+');
        // fwrite($file, $string);
        // fclose($file);
        return view('catalog.search', [
            'products' => $products['data'],
            'string' => $string,
        ]);
    }
}
