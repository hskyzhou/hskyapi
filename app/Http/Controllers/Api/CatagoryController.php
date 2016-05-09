<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CatagoryController extends Controller
{
    public function FirstCata(){
        $data = [
            '语文',
            '数学',
            '英语',
            '化学',
            '物理',
        ];
        return response()->json($data);
    }


    public function SecondCata(){
        $data = [
            '二级分类1',
            '二级分类2',
            '二级分类3',
            '二级分类4',
            '二级分类5',
        ];
        return response()->json($data);
    }
}
