<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;

class PropertyController extends Controller
{
    //
    public function index()
	{
        $pro = Property::all();
        return view('index')->with('pros', $pro);
	}

    public function properties(){
        $pro = Property::all();
        return view('properties')->with('pros', $pro);
    }
    public function pro_details($id) {
        $details = Property::where('id', '=', $id)->get();
        return view ('properties-single')->with('details', $details);
    }
}
