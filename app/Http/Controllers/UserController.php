<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if ($request->session()->has('token')) {
            return view('login.user.index');
        }
        return redirect()->route('login.create');
    }

    public function setting(Request $request)
    {
        if ($request->session()->has('token')) {
            $profile = $this->requestHelper->getUserRequest($request, 'profile');
            return view('login.user.setting', [
                'profile' => $profile['data']
            ]);
        }
        return redirect()->route('login.create');
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

    public function subscribe(Request $request)
    {
        if ($request->session()->has('token')) {
            return view('login.user.subscribe');
        }
        return redirect()->route('login.create');
    }

    public function orders(Request $request)
    {
        if ($request->session()->has('token')) {
            return view('login.user.orders');
        }
        return redirect()->route('login.create');
    }
}

