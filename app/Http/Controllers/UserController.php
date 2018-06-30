<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Code;

class UserController extends Controller
{
    public function generateUserId(){
        $id;
        for($ctr = 0;$ctr<1;){
            $id = rand(1000000, 9999999);
            $test = 201810001;
            $check = DB::table('users')->where('id', $id)->first();
            if($check==null){
                $ctr++;
            }
        }
        
    }

    public function verifyCode(){
        $sample = "CD8e2c535";
        $check = DB::table('codes')->where('code',$sample)->first();
        if($check!=null){
            if($check->status == 0){
                echo 'code is available';
            }
            else{
                echo 'code is already used';
            }
        }
        else{
            echo 'code is not available';
        }
    }

    

}
