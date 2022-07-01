<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            // dd($profile);
            return view('login.user.setting', [
                'profile' => $profile['data']
            ]);
        }
        return redirect()->route('login.create');
    }

    public function settingPut(Request $request)
    {
        if ($request->input('name')) {
            $profile = [
                "name" => $request->input('name'),
                "surname" => $request->input('surname'),
                "email" => $request->input('email')
            ];
            // dd($profile);
            if ($request->session()->has('token')) {
                $this->requestHelper->getUserRequest($request, 'profile', $profile, 'put');
                return ['status' => 'ok'];
            }
        }
        if ($request->input('address.street')) {
            $addresses = [
                "street" => $request->input('street'),
                "apartment" => $request->input('apartment'),
                "floor" => $request->input('floor'),
                "entrance" => $request->input('entrance'),
                "intercom" => $request->input('intercom')
            ];
            // dd($addresses);
            if ($request->session()->has('token')) {
                $this->requestHelper->getUserRequest($request, 'profile/address', $addresses, 'put');
                return ['status' => 'ok'];
            }
        }
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
            $orders = $this->requestHelper->getUserRequest($request, 'profile/orders');
            // dd($orders);
            if ($orders['data']['count']) {
                $order = $orders['data']['orders'];
                return view('login.user.orders', [
                    'orders' => $order,
                ]);
            }
            return view('login.user.orders', [
                'orders' => $orders['data']['count'],
            ]);
        }
        return redirect()->route('login.create');
    }

    public function order() {
        /*if ($request->session()->has('token')) {
            $orders = $this->requestHelper->getUserRequest($request,'profile/orders', $slug_order);
        }*/
        return view('login.user.order_item');
    }
}

