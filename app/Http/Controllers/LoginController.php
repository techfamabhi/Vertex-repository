<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function Login(Request $request)
    {
        $username=$request->get('username');
        $pass=$request->get('password');
        if($username=='admin'&&$pass=='admin123')
        {
            $request->session()->put('username',$username);
           
            $arr=array();
            $data['status']="success";
            $data['msg']="Login success";
            
            array_push($arr,$data);
            return response()->json($arr);
        }
        else
        {
            $arr=array();
            $data['status']="fail";
            $data['msg']="Login fail";
            array_push($arr,$data);
            return response()->json($arr);
        }
    }
    public function getlogin(Request $request)
    {
        //echo "test";
        $get=$request->session()->get('username');
        echo $get;
        //return response()->json($get);
    }
}
