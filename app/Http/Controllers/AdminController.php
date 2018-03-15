<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Module;
use App\System;
use App\Order;
use Auth;
class AdminController extends Controller
{
    public function index(){
        return redirect('/backend/dashboard');
    }
    public function dashboard()
    {
        $orders = Order::all();
        foreach($orders as $order)
        {
            $order->order = json_decode($order->order);
        }

    	return view('admin.dashboard',compact('orders'));
    }

    public function modules()
    {
        $modules = Module::all();
    	return view('admin.modules',compact('modules'));
    }

    public function systems()
    {
    	$systems = System::all();
        $modules = Module::all();
    	return view('admin.system',compact('systems','modules'));
    }

    public function updateModule(Request $request)
    {
        // return $request->except('_token');   
    	Module::updateOrCreate(['id'=>$request->id],$request->except('_token'));
    	return redirect('/backend/modules');
    }

    public function updateSystem(Request $request)
    {
    	$system = System::updateOrCreate(['id'=>$request->id],$request->except('_token','module_id'));
        foreach($request->module_id as $id)
        {
            if(!$system->modules->contains('id',$id))
                $system->modules()->attach($id);
        }

        $module_id = collect($request->module_id);
        //update if something is deleted
        foreach($system->modules as $module)
        {
            if(!$module_id->contains($module->id))
                $system->modules()->detach($module->id);
        }
    	return redirect('/backend/systems');
    }

    public function onDelete(Request $request)
    {
        $model_name=$request->model;
    	$model = $model_name::find($request->id);
    	$model->delete();
    	return redirect($request->route_name);
    }

    public function login($guard = null){
        if(Auth::guard($guard)->check())
        {
            return redirect('/backend/dashboard');
        }
        else
            return view('home.login');
    }

    public function validateUser(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/backend/dashboard');
        }
        else
            return redirect()->back()->with('message','email and password did not exist');
    }

    public function logout(){
        Auth::logout();
        return redirect('/backend/login');
    }
}