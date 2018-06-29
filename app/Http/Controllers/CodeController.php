<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use App\Code;

class CodeController extends Controller
{
    function index(){
        return view('code.index');
    }

    
    function generateCode(){
        $random = substr( "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ" ,mt_rand( 0 ,50 ) ,2 ) .substr( md5( time() ), 1,2);
        $random2 = substr( "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ" ,mt_rand( 0 ,50 ) ,2 ) .substr( md5( time() ), 1,2);
        $random3 = substr(md5(rand()),0,4);
        $test = "80ff-hi66-OP66";
        $genCode = $random3."-".$random."-".$random2;
        $check = DB::table('codes')->where('code', $test)->first();
        if($check != null){
            echo 'nagamit na';
        }
        else{
            echo 'pwede pa';
            Code::create([
                'code' => $genCode,
                'status' => 0,
                'used_to' => 0,
                'used_by' => 0,
            ]);
            dd($genCode);
        }
        
        dd($test);
    }
}
