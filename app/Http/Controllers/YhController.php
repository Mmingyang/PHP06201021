<?php

namespace App\Http\Controllers;

use App\Models\Yh;
use Illuminate\Http\Request;

class YhController extends Controller
{
    //
    public function index()
    {
        $yhs=Yh::all();

        return view("yh/index",compact("yhs"));

    }


    public function add(Request $request)
    {
        if($request->isMethod("post")){
            //1. 验证

            $this->validate($request,[
                "name"=>"required",
                "imgs"=>"required",
                "sex"=>"required",
                "age"=>"required",
                "tel"=>"required",
                "address"=>"required",
                "captcha"=>"required|captcha",
            ]);

            $data=$request->post();


//            var_dump($data);exit;

            $file = $request->file("imgs");


            $data['imgs']=$file->store("images","image");


            Yh::create($data);


            return redirect()->route("yh.index")->with("success","添加成功");

        }

        return view("yh.add");

    }


    public function edit(Request $request,$id)
    {

        $yh=Yh::find($id);

        if($request->isMethod("post")){


            $data=$request->post();

            $file=$request->file("imgs");

            $data['imgs']=$file->store("images","image");


            if($yh->update($data)){

                return redirect()->route("yh.index")->with("success","编辑成功");
            }

        }

        return view("yh.edit",compact("yh"));


    }


    public function del($id)
    {

        $yh=Yh::find($id);

        if($yh->delete()){

            return redirect()->route("yh.index")->with("success","删除成功");

        }

    }





}
