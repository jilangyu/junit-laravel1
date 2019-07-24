<?php
/**
 * Created by PhpStorm.
 * User: chenygd
 * Date: 2019/7/24
 * Time: 9:56
 */

namespace Jilang\JunitLaravel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FristJunitController extends Controller
{
    public function index(){
        return view("junit::index");
    }

    public function store(Request $request){
        $name = $request->input("name");
        $age  = $request->input("age");
        $arr = ['name'=>$name,'age'=>$age];
        echo json_encode($arr);


    }

}