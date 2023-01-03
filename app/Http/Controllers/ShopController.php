<?php

namespace App\Http\Controllers;
use App\Models\Area;
use App\Models\shop;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){

        //1対多 親->子
        $shops = Area::find(1)->shops;
        // 親 <- 子
        $area = shop::find(2)->area;
        //多対多
        $route = shop::find(1)->route()->get();
        dd($shops, $area, $route);
    }
}
