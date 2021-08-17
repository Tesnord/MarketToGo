<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function create()
    {
        return view('login.index');
    }

    public function store(Request $request)
    {
        $phone = $request->post('phone');
        $code = $request->post('code');
        if (empty($code)) {
            $login = $this->requestHelper->getLogin(['phone' => $phone]);
                // Сохранение в файл...УДАЛИТЬ!!!
                $file = fopen('token_data.json','w+');
                fwrite($file, $login);
                fclose($file);
        } else {
            $login = $this->requestHelper->getLogin(['phone' => $phone, 'code' => $code]);
                // Сохранение в файл...УДАЛИТЬ!!!
                $file = fopen('token_data.json','w+');
                fwrite($file, $login);
                fclose($file);
            $result = $login->json();
            if ($result['meta']['code'] === 400) {
                return response($result['meta']['message'], 400);
            }
            $request->session()->put('token', $result['data']);
            $favorites = $this->requestHelper->getUserRequest($request, 'favorites', $GLOBALS["favorites"], 'put');
            setcookie('market_favorites', json_encode(['favorites' => $favorites['data']]));
                // Сохранение в файл...УДАЛИТЬ!!!
                $file = fopen('f_data.json','w+');
                fwrite($file, $favorites);
                fclose($file);
        }

    }
}
