<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        dd('test');
        //Eloquant
        $values = Test::all();
        $Test = Test::count();

        // queryビルダー
        $queryBuilder = DB::table('test')->where('text', '=', 'bbb')
            ->select('id', 'text')
            ->get();

        dd($values);
        return view('tests.test', compact('$values'));
    }
}
