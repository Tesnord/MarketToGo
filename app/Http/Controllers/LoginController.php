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
                ->getRequest('login', ['phone' => $phone], 'post', 'auth');
            $login = $login['data'];
            return ['status' => 'ok', 'code' => $login];
        } else {
            $login = $this->requestHelper
                ->getRequest('login', ['phone' => $phone, 'code' => $code], 'post', 'auth', );
            if ($login['meta']['code'] === 400) {
                return response($login['meta']['message'], 400);
            }
            $request->session()->put('token', $login['data']);

            $this->requestHelper->getCookie($request, 'favorites');
            $this->requestHelper->getCookie($request, 'basket');
        }
    }

    public function logout(Request $request)
    {
        $tokens = $request->session()->get('token');
        $this->requestHelper->getRequest('logout', ['refreshToken' => $tokens['refreshToken']], 'post', 'auth');
        // dd($result);

        session()->remove('token');

        return ['status' => 'ok', 'uri' => '/'];
    }
}
