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
            $login = $login['data'];
            return ['status' => 'ok', 'code' => $login];
                // // Сохранение в файл...УДАЛИТЬ!!!
                // $file = fopen('token_data.json','w+');
                // fwrite($file, $login);
                // fclose($file);
        } else {
            $login = $this->requestHelper->getLogin(['phone' => $phone, 'code' => $code]);
            $result = $login->json();
            if ($result['meta']['code'] === 400) {
                return response($result['meta']['message'], 400);
            }
            $request->session()->put('token', $result['data']);
            $favorites = $this->requestHelper->getUserRequest($request, 'favorites', $GLOBALS["favorites"], 'put');
            if ($favorites['data'] === false) {
                cookie('market_favorites', json_encode(['favorites' => []]), 60*24*7);
            } else {
                cookie('market_favorites', json_encode(['favorites' => $favorites['data']]), 60*24*7);
            }

        }
    }

    public function logout()
    {
        $tokens = session()->get('token');
        $result = $this->requestHelper->logout(['refreshToken' => $tokens['refreshToken']]);
        session()->remove('token');
        // TODO запись в файл УДАЛИТЬ!!!
        if ($result['meta']['code'] !== 200) {
            $file = fopen('logs_logout_errors.json','w+');
            fwrite($file, $result);
            fclose($file);
        }
        return ['status' => 'ok', 'uri' => '/'];
    }
}
