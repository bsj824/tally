<?php

namespace App\Http\Controllers;

use App\Model\classify;
use App\Model\Money;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function show()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        $classid = classify::where('name',$request->get('cooking_type'))->first();
        $class = $request->all();
        $class['user_id'] = Auth::id();
        $class['class_id'] =$classid->id;
        $class['type'] = 'income';
        Money::create($class);

    }
}
