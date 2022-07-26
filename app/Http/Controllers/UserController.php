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
            $address = $this->requestHelper->getUserRequest($request, 'profile/addresses');
//            dd($profile);
//            dd($address);
            return view('login.user.setting', [
                'profile' => $profile['data'],
                'addresses' => $address['data'] ?? ''
            ]);
        }
        return redirect()->route('login.create');
    }

    public function settingPut(Request $request)
    {
//        dd($request);
        if ($request->input('name')) {
            $result = $this->requestHelper->getUserRequest($request, 'profile', $request->input(), 'put');
        }
        if ($request->input('street')) {
            $addresses = [
                "street" => $request->input('street'),
                "apartment" => $request->input('apartment'),
                "floor" => $request->input('floor'),
                "entrance" => $request->input('entrance'),
                "intercom" => $request->input('intercom')
            ];
            if ($request->input('id')) {
                $result = $this->requestHelper->getUserRequest($request, 'profile/addresses/' . $request->input('id'), $addresses, 'put');
            } else {
                $result = $this->requestHelper->getUserRequest($request, 'profile/addresses', $addresses, 'post');
            }
        }
//        dd($result);
        if ($result['meta']['code'] == 200) {
//            dd($result);
            return back()->withInput();
        } else {
            //dd($result);
            return false;
        }
    }

    public function settingDelete(Request $request) {
        if ($request->session()->has('token')) {
            $result = $this->requestHelper->getUserRequest($request, 'profile/addresses/' . $request->post('id'), [], 'delete');
            return ['result' => $result];
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
//            dd($orders);
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

