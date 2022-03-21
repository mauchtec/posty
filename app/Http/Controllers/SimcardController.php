<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Sims;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SimcardController extends Controller
{
    
    public function getsims(){
        //$sites =Post::all();
        $data = DB::table('posts')
      ->join('sims', 'posts.id', "=", 'sims.posts_id' )
      ->select('sims.*', 'posts.sitename')
      ->get();
       
       return  response()->json(['data'=>$data]);
      

    }
    public function getsim($id){
      $sim = sims::find($id);
     if($sim){
         return response()->json([
             'status'=>200,
              'messages'=>$sim,
         ]);

     }else{
      return response()->json([
          'status'=>404,
           'messgages'=>'student not found',
      ]);
     }
      
  }

  //delete sim

  public function delete($id){
//dd($id);
    $sim = Sims::find($id);
    $sim->delete();
    return response()->json([
        'status'=>200,
        'message'=>'cool'
    ]);
  }

  //Get all site name and id
    public function index(){
      
        $sites =Post::all();
              
       Return view('sims.index',['sites'=>$sites]);

    }
//Save a new sim card
    public function store(Request $request){
      $this->validate($request,[
        'posts_id'=>'required',
        'simserial'=>'required'
      ]);
        $sim = Sims::create([
            'posts_id'=>$request->posts_id,
            'simserial'=>$request->simserial,
            'simmsisdn'=>$request->simmsisdn,
            'simnetwork'=>$request->simnetwork,
            'simpuck'=>$request->simpuck,
            'simpin'=>$request->simpin,
            'scannerserial'=>$request->scannerserial,
            'simtype'=>$request->simtype,
        ]);  
        
      $sim->save();

        Return  redirect()->route('sim');
    }

    //Update sim card

    public function updatesim(Request $request,$id){

    //dd($request);

      $sim =  Sims::find($id);
      //dd( $sim->posts_id);
      $sim->posts_id = $request->input('posts_id');
      $sim->simserial = $request->input('simserial');
      $sim->simmsisdn = $request->input('simmsisdn');
      $sim->simnetwork = $request->input('simnetwork');
      $sim->simpuck = $request->input('simpuck');
      $sim->simpin = $request->input('simpin');
      $sim->scannerserial = $request->input('scannerserial');
      $sim->simtype = $request->input('simtype');
     // dd($sim);
      $sim->update();
      return response()->json([
          'status'=>200,
          'message'=>'cool'
      ]);

    }
}
