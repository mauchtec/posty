<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts =Post::get();
         
        return view('posts.index',['posts'=>$posts]);
    }
    public function store(Request $request){
       $this->validate($request,[
        'suppervisorname'=>'required',
        'sitename'=>'required',
        'suppervisoremail'=>'required',
        'location'=>'required',
        'sitenumber'=>'required'
       ]);
       
       $request->user()->posts()->create([
        'location'=>$request->location,
        'sitename'=>$request->sitename,
        'sitenumber'=>$request->sitenumber,
        'suppervisorname'=>$request->suppervisorname,
        'suppervisoremail'=>$request->suppervisoremail       ]);

        Return back();
    }


    public function update(Request $request, $id){
        $this->validate($request,[
         'suppervisorname'=>'required',
         'sitename'=>'required',
         'suppervisoremail'=>'required',
         'location'=>'required',
         'sitenumber'=>'required'
        ]);
        
        $post =  Post::find($id);
        $post->suppervisorname = $request->input('suppervisorname');
        $post->sitename = $request->input('sitename');
        $post->suppervisoremail = $request->input('suppervisoremail');
        $post->location = $request->input('location');
        $post->sitenumber=$request->input('sitenumber');

        $post->update();
        return response()->json([
            'status'=>200,
            'message'=>'cool'
        ]);
    
     }

     public function delete($id){
        $post =  Post::find($id);
        $post->delete();
        return response()->json([
            'status'=>200,
            'message'=>'cool'
        ]);
    
    }

    public function edit($id){
        $posts = Post::find($id);
        if($posts){
            return response()->json([
                'status'=>200,
                 'messages'=>$posts,
            ]);
 
        }else{
         return response()->json([
             'status'=>404,
              'messages'=>'student not found',
         ]);
        }
       
        
    }
}
