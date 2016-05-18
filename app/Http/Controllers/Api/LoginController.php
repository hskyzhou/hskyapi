<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function login(){
        $username = request('username');
        $password = request('password');

        if($username = 'admin' && $password = 'admin'){
            $data = [
                'result' => 1,
                'message' => '登录成功'
            ];
        }else{
            $data = [
                'result' => 2,
                'message' => '登录失败'
            ];
        }

        return response()->json($data);
    }
}
