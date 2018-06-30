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
        $count = 3;
        $sout = array();
        for($ctr = 0;$ctr < $count;){
            $random = substr( "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ" ,mt_rand( 0 ,50 ) ,2 ) .substr( md5( time() ), 1,10);
            $check = DB::table('codes')->where('code', $random)->first();
            //$count = DB::table('codes')->count();
            if($check == null){
                Code::create([
                    'code' => $random,
                    'status' => 0,
                    'used_to' => 0,
                    'used_by' => 0,
                ]);
                $sout[] = $random;
                $ctr++;
            }
            
            
        }
        dd($sout);
    }
}
