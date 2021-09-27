<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function index(Request $request)
    {
        // $tokens = $request->session()->get('token');
        // dd($tokens['refreshToken']);
//         dd($request->session()->all());
        return view('login.user.index');
    }

    public function setting(Request $request)
    {
        $profile = $this->requestHelper->getUserRequest($request, 'profile');
//        dd($profile['data']);
        return view('login.user.setting', [
            'profile' => $profile['data']
        ]);
    }

    public function settingPut(Request $request)
    {
        if (!$request->session()->has('token')) {
            return ['status' => 'ok'];
        }
        $profileName = $request->input('name');
        $profileSurname = $request->input('surname');
        $profileMail = $request->input('email');
        $profileStreet = $request->input('address.street');
        $profileApartment = $request->input('address.apartment');
        $profileFloor = $request->input('address.floor');
        $profileEntrance = $request->input('address.entrance');
        $profileIntercom = $request->input('address.intercom');
        $this->requestHelper->getUserRequest($request, 'profile', [
            "name" => $profileName,
            "surname" => $profileSurname,
            "email" => $profileMail,
            "address" => [
                "street" => $profileStreet,
                "apartment" => $profileApartment,
                "floor" => $profileFloor,
                "entrance" => $profileEntrance,
                "intercom" => $profileIntercom
            ]
        ], 'put');
        return ['status' => 'ok'];
    }

    public function subscribe()
    {
        return view('login.user.subscribe');
    }

    public function orders()
    {
        return view('login.user.orders');
    }
}

