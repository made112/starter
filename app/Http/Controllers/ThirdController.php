<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThirdController extends Controller
{
    public function create_me(){
        return 'in create method' ;
    }
    public function getIndex(){
//        $data = ['ahmed','bassem'];
        $data = [];
        return view('welcome',compact('data'));
//        $data =[];
//        $data['id']=5;
//        $data['name']='mohammad hassan';
//
//        return view('welcome',$data);
//        $obj= new \stdClass();
//        $obj->name = 'ahmed';
//        $obj->id = '5';
//        $obj->gender = 'male';
//        return view('welcome',compact('obj'));



    }
}
