<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function show(Request $request)
    {
        $string = $request->input('search');
        $result = $this->requestHelper->getRequest('search/'.$string);
        $search = $result['data'];
//         dd($search);
        // $paginator = $this->requestHelper->pagination($search['products'], $search['count'], $string);

        return view('catalog.search', [
            'products' => $search,
            'string' => $string,
            // 'paginator' => $paginator
        ]);
    }
}
