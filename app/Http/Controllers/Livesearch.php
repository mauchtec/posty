<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Livesearch extends Controller
{
    function index()
    {
        return view('sims.index');
    }
    function search(Request $request){

        //dd($request);
        $query =$request->get('query');
        if($query !=''){
            $data = DB::table('sims')
            ->where('simserial', 'like','%'.$query.'%')
            ->orwhere('simmsisdn', 'like','%'.$query.'%')
            ->orwhere('simnetwork', 'like','%'.$query.'%')
            ->orwhere('simtype', 'like','%'.$query.'%')
            ->orwhere('scannerserial', 'like','%'.$query.'%')
            ->orderBy('simmsisdn', 'desc')
            ->get();
        }else{
            $data = DB::table('sims')
            ->orderBy('simserial', 'desc')
            ->get();
        }
        //dd($data);
        return response()->json([
            'status'=>200,
             'messages'=>$data,
        ]);  
    }

    //search site

    function search2(Request $request){

        //dd($request);
        $query =$request->get('query');
        if($query !=''){
            $data = DB::table('posts')
            ->where('location', 'like','%'.$query.'%')
            ->orwhere('sitename', 'like','%'.$query.'%')
            ->orwhere('sitenumber', 'like','%'.$query.'%')
            ->orwhere('suppervisorname', 'like','%'.$query.'%')
            ->orwhere('suppervisoremail', 'like','%'.$query.'%')
            ->orderBy('sitename', 'desc')
            ->get();
        }else{
            $data = DB::table('posts')
            ->orderBy('sitename', 'desc')
            ->get();
        }
        //dd($data);
        return response()->json([
            'status'=>200,
             'messages'=>$data,
        ]);  
    }
}
