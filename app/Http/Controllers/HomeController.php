<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\System;
use App\Module;
use App\Customer;
use App\Order;
class HomeController extends Controller
{
    public function home()
    {
    	return view('home.home');
    }

    public function about()
    {
    	return view('home.about');
    }

    public function contact()
    {
    	return view('home.contact');
    }

    public function system(){
        $systems = System::all();
        return view('home.systems',compact('systems'));
    }

    public function cart(){
        $carts = session('cart');
        return view('home.cart',compact('carts')); 
    }

    public function login()
    {
    	return view('home.login');
    }

    public function addToCart(Request $request)
    {
        $data = $request->all();
        $array = array();
        if(session('cart'))
        {
            $array = session('cart');
        }
        $array2 = array();
        $total = 0;
        foreach($data['module_id'] as $id)
        {
            $module = Module::find($id);
            $array2[] = [
                "module_name" => $module->name,
                "modele_id"=> $module->id
            ];
            $total+= $module->price;
        }
        $array[] = [
            "system_name" => System::find($request->id)->name,
            "modules"=>$array2,
            "total"=>$total,
            "id"=>$request->id
        ];
        session()->put('cart',$array);
        return response()->json(session('cart'));
    }

    public function placeOrder(Request $request)
    {
        $customer = Customer::updateOrCreate(['id'=>$request->id],$request->except('_token'));
        $order = new Order;
        $json = json_encode(session('cart'));
        $cart = collect(session('cart'));
        $order->customer_id = $customer->id;
        $order->order_no = "XYZ".count(Order::all())+1;
        $order->amount = $cart->sum('total');
        $order->order = $json;
        $order->save();
        $request->session()->forget('cart');
        return redirect('/');
    }
}
