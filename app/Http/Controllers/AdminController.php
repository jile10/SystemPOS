<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Module;
use App\System;
class AdminController extends Controller
{
    public function dashboard()
    {
    	return view('admin.dashboard');
    }

    public function modules()
    {
    	return view('admin.modules');
    }

    public function systems()
    {
    	$systems = System::all();
    	return view('admin.systems',compact('systems'));
    }

    public function updateModule(Request $request)
    {
    	Module::updateOrCreate($request->all());
    	return redirect('/backend/modules');
    }

    public function updateSystem(Request $request)
    {
    	System::updateOrCreate($request->all());
    	return redirect('/backend/systems');
    }

    public function onDelete(Request $request)
    {
    	$model = $request->model::find($request->id);
    	$model->delete();
    	return redirect($request->route_name);
    }
}