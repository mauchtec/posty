<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteSummeryController extends Controller
{
    //

    public function index1(){
        $data = DB::table('sims')
      ->join('posts', 'posts.id', "=", 'sims.posts_id' )
      ->select('sims.*', 'posts.*')
      ->get();

     // dd($data);
        return view('home', ['data'=>$data]);
    }

    public function index(){
        $data = DB::table('posts')
        ->join('sims', 'posts.id', "=", 'sims.posts_id' )
        ->select('sims.*', 'posts.*')
        ->get();
         
        return view('home',['data'=>$data]);
    }
}
