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

        if($username == 'admin' && $password == 'admin'){
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

    public function forgetpass(){
        $data = [
            'result' => 1,
            'message' => '找回密码成功'
        ];

        return response()->json($data);
    }

    public function register(){
        $data = [
            'result' => 1,
            'message' => '注册成功'
        ];

        return response()->json($data);   
    }

    public function cart(){
        $data = [
            'result' => 1,
            'cart' => [
                [
                    'catagory_name' => '栏目1',
                    'shops' => [
                        [
                            'shop_name' => '产品1',
                            'shop_desc' => '产品说明1',
                            'shop_price' => '20元/盒',
                            'shop_standard' => '每盒300g',
                            'shop_number' => 1,
                        ],
                        [
                            'shop_name' => '产品1',
                            'shop_desc' => '产品说明1',
                            'shop_price' => '20元/盒',
                            'shop_standard' => '每盒300g',
                            'shop_number' => 2,
                        ]
                    ]
                ],
                [
                    'catagory_name' => '栏目2',
                    'shops' => [
                        [
                            'shop_name' => '产品3',
                            'shop_desc' => '产品说明1',
                            'shop_price' => '20元/盒',
                            'shop_standard' => '每盒300g',
                            'shop_number' => 3,
                        ],
                        [
                            'shop_name' => '产品4',
                            'shop_desc' => '产品说明1',
                            'shop_price' => '20元/盒',
                            'shop_standard' => '每盒300g',
                            'shop_number' => 4,
                        ]
                    ]
                ]
            ]
        ];

        return response()->json($data);   
    }
}
