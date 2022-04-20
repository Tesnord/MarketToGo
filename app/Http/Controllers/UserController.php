<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
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
        if (!$request->session()->has('token')) {
            return redirect()->route('login.create');
        }
        try {
            $profile = $this->requestHelper->getUserRequest($request, 'profile');
        } catch (\Exception $e) {
            return redrect()->route('login.create');
        }
        return view('login.user.setting', [
            'profile' => $profile['data']
        ]);
    }

    public function settingPut(Request $request)
    {
        if (!$request->session()->has('token')) {
            return ['status' => 'ok'];
        }
        $this->requestHelper->getUserRequest($request, 'profile', [
            "name" => $request->input('name'),
            "surname" => $request->input('surname'),
            "email" => $request->input('email'),
            "address" => [
                "street" => $request->input('address.street'),
                "apartment" => $request->input('address.apartment'),
                "floor" => $request->input('address.floor'),
                "entrance" => $request->input('address.entrance'),
                "intercom" => $request->input('address.intercom')
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
            $orders = $this->requestHelper->getUserRequest($request, 'profile/orders');
            // dd($orders['data']);
            if ($orders['data']['count'] > 0) {
                $order = $orders['data']['orders'];
                // $paginator = new LengthAwarePaginator($order['products'], $order['count'], 30);
                // $paginator->setPath('/catalog/' . $slug_category);
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
}

