<?php

namespace app;


use Faker\Provider\Image;

class Handles
{
    protected  $allowed_ext = ['png','jpeg','jpg','gif'];   //限定图片的类型

    public function save($file,$width_max=0)
    {
        //拼接图片的存放路径
        $folder_name = "uploads/img".date('Ym',time()).'/'.date('d',time()).'/';
        //拼接
        $upload_path = public_path().'/'.$folder_name;
        //确保后缀名一直存在，因为从剪切板里黏贴时后缀名为空
        $extension = strtolower($file -> getClientOriginalExtension()) ?:'png';
        //拼接文件名
        $file_name = time().'_'.str_random(10).'.'.$extension;
        //判断上传是否为图片，如果不是则中止操作
        if(! in_array($extension , $this->allowed_ext)){
            return false;
        }
        //将图片移到目标文件夹中
        $file->move($upload_path , $file_name);
        //如果限制了图片的宽度，就进行裁剪
        if($width_max && $extension != 'gif'){
            //此类中用于裁剪图片的函数
            $this->reduceSize($upload_path.'/'.$file_name,$width_max);
        }
        return [
            'path' => config('app.url')."$folder_name/$file_name",
        ];
    }
    public function reduceSize($file_path , $width_max)
    {
        //先实例化，传参是文件的磁盘物理路径
        $image = Image::make($file_path);
        //进行大小调整
        $image->resize($width_max, null, function ($constraint) {
            // 设定宽度是 $max_width，高度等比例双方缩放
            $constraint->aspectRatio();
            // 防止裁图时图片尺寸变大
            $constraint->upsize();
        });
        // 对图片修改后进行保存
        $image->save();
    }


    }