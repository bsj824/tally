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
        $data = $request->all();
        $data['user_id'] = Auth::id();
        $data['class_id'] =$classid->id;
        $data['type'] = 'income';
        Money::create($data);
        return redirect('index');

    }
}
