<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumController extends Controller
{
    public function sumView(){
    	return view('sum-view');
    }

    public function sum(Request $request){
    		$data = $request->all();
    		$number1=$data['n1'];
    		$number2=$data['n2'];
    		$sum = $number1 + $number2;
    		return view('output',['ketqua' =>$sum]);
    }
}
