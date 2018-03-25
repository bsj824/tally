<?php

namespace App\Http\Controllers;

use App\Model\classify;
use App\Model\Information;
use App\Model\Money;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BackendController extends Controller
{
    /**
     * 返回'添加收入支出金额'页面
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     *
     * Show the form for creating a new resource.
     *返回收入页面
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('income');
    }

    /**
     * Store a newly created resource in storage.
     *进行支出支出存储
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $classid = classify::where('name',$request->get('cooking_type'))->first();
        $class = $request->all();
        $class['user_id'] = Auth::id();
        //dd($classid->id);
        $class['class_id'] =$classid->id;
        $class['type'] = 'pay';
        Money::create($class);
        return redirect('index');

    }

}
