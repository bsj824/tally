<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedbackRequest;
use App\Model\feedback;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    /**
     * 返回反馈页面
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('feedback');
    }
    /**
     * 添加反馈信息并返回首页
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FeedbackRequest $request)
    {
        $request->all();
        $feedback = Feedback::create([
           'nickname' =>$request->nickname,
            'theme' =>$request->theme,
            'details'=>$request->details,
            'phone' =>$request->phone,
            'qq' =>$request->qq,
            'e_mail' =>$request->e_mail,
        ]);
        if ($feedback == true){
            echo "<script language=javascript>alert('您的问题我们会及时解决！');</script>";
            return redirect()->action('IndexController@index');
        }else{
            return  redirect('feedback');
        }
    }

}
