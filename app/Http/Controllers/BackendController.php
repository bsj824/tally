<?php

namespace App\Http\Controllers;


use App\Models\classify;
use App\Models\Money;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BackendController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['only'=>['store']]);
    }
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
        $classid = classify::where('name',$request->get('cooking_type'))->first();
        $class = $request->all();
        if(is_null($request->cooking_type)){
           echo "<script>alert('请填写账本类型');history.go(-1);</script>";
        }
        $class['user_id'] = Auth::id();
        $class['class_id'] =$classid->id;
        $class['type'] = 'pay';
        Money::create($class);
        return redirect('index');

    }

}
