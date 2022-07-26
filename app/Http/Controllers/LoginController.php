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
            $result = $this->requestHelper
                ->getRequest('login', ['phone' => $phone], 'post', 'auth');
        } else {
            $result = $this->requestHelper
                ->getRequest('login', ['phone' => $phone, 'code' => $code], 'post', 'auth', );
            if ($result['meta']['code'] === 200) {
                $request->session()->put('token', $result['data']);
                $this->requestHelper->getCookie($request, 'favorites');
                $this->requestHelper->getCookie($request, 'basket');
            }
        }
        return ['result' => $result];
    }

    public function logout(Request $request)
    {
        $tokens = $request->session()->get('token');
        $result = $this->requestHelper->getRequest('logout', ['refreshToken' => $tokens['refreshToken']], 'post', 'auth');
        // dd($result);

        session()->remove('token');

        return ['result' => $result];
    }
}
