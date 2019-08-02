<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    function showHello($name){
        return '<h1>Hello:'.$name.'</h1>';
    }

    function show(){
        return view('create.users')
            ->with('name','Tong')   //โยนตัวแปร name ออกไป ซึ่ง name เก็บค่า Tong ไว้
            ->with('title','Laravel tutorial');
    }

    function resultProduct($product){
        return '<h1>Show:'.$product.'</h1>';
    }
}
