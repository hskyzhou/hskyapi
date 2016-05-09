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
        $parent = request('parent', '');
        if(empty($parent)){
            switch($parent){
                case "语文":
                    $data = [
                        '语文二级分类1',
                        '语文二级分类2',
                        '语文二级分类3',
                        '语文二级分类4',
                        '语文二级分类5',
                    ];
                    break;
                case "数学":
                    $data = [
                        '数学二级分类1',
                        '数学二级分类2',
                        '数学二级分类3',
                        '数学二级分类4',
                        '数学二级分类5',
                    ];
                    break;
                case "英语":
                    $data = [
                        '英语二级分类1',
                        '英语二级分类2',
                        '英语二级分类3',
                        '英语二级分类4',
                        '英语二级分类5',
                    ];
                    break;
                case "化学":
                    $data = [
                        '化学二级分类1',
                        '化学二级分类2',
                        '化学二级分类3',
                        '化学二级分类4',
                        '化学二级分类5',
                    ];
                    break;
                case "物理":
                    $data = [
                        '物理二级分类1',
                        '物理二级分类2',
                        '物理二级分类3',
                        '物理二级分类4',
                        '物理二级分类5',
                    ];
                    break;
            }
        }
        
        return response()->json($data);
    }
}
