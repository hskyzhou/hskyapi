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
}
