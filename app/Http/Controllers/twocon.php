<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class twocon extends Controller
{
    //
    public function getindex2(){
        $obj = new \stdClass();
        $obj -> name ='Joe Jan';
        $obj ->age =22;
        return view('Hello',compact('obj'));
    }

    public function getLanding(){
        return view('layout.landing');
    }

    public function AboutMethod(){
        $data = [];
        return view('about',compact('data'));
    }
}
