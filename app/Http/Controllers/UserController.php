<?php

namespace App\Http\Controllers;

use App\Handles\ImageUploadHandles;
use App\Http\Requests\UserRequest;
use App\Model\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * 显示个人资料页面
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Information $information)
    {

        return view('data',['information'=>$information]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('me');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request, ImageUploadHandles $uploader)
    {
        $data = $request->all();
        if ($request->avatar){
            $result = $uploader->save($request->avatar,362);
            if ($request){
                $data['avatar'] = $result['path'];
                $data['user_id'] = Auth::id();
            }
        }
        Information::create($data);
        return redirect('user/create');
   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $information = Information::where('user_id',$id)->first();
        return view('updatedata',['information'=>$information]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id,ImageUploadHandles $handles)
    {
        $information = Information::where('user_id',$id)->first();
        $data = $request->all();
        if ($request->avatar){
            $result = $handles->save($request->avatar,362);
            if ($request){
                $data['avatar'] = $result['path'];
                $data['user_id'] = Auth::id();
            }
        }
        Information::updated($data);
        return redirect()->action('UserController@create');
    }


}
