<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

use function Symfony\Component\String\s;

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
            $login = $this->requestHelper
                ->getRequest('login', 'post', 'auth', ['phone' => $phone]);
            $login = $login['data'];
            return ['status' => 'ok', 'code' => $login];
        } else {
            $login = $this->requestHelper
                ->getRequest('login', 'post', 'auth', ['phone' => $phone, 'code' => $code]);
            if ($login['meta']['code'] === 400) {
                return response($login['meta']['message'], 400);
            }
            $request->session()->put('token', $login['data']);

            $this->requestHelper->getCookie($request, 'favorites');
            $this->requestHelper->getCookie($request, 'basket');
        }
    }

    public function logout()
    {
        $tokens = session()->get('token');
        $result = $this->requestHelper
            ->getRequest('logout', 'post', 'auth', ['refreshToken' => $tokens['refreshToken']]);
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
