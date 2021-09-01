<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Carbon;
use Auth;
class Pagehandle extends Controller
{
    //

     public function sample(){


    	return  view('sample');
    }

    // blog view page method  start 
    public function about(){
    	// $get_data =Post::all();
        $get_data =Post::Latest()->paginate(2);
        $get_comment =Comment::latest()->paginate(2);
    	return view('about', compact('get_data','get_comment'));
    }
    
    // blog view page method  start 

   
    // blog data store method start 
    public function poststore(Request $request){
//validation start 
    	$validateData  =$request->validate([
    		'name'=>'required|max:100',
    		'title'=>'required|max:500',
    		'description'=>'required|max:2000'

    	]);
//validation end 

//data insert method start 
    	Post::insert([
    		'user_id'=>Auth::user()->id,
    		'name'=>$request->name,
    		'title'=>$request->title,
    		'description'=>$request->description,
             'created_at'=>Carbon::now()


    	]);
        $notification = array(
            'message' => 'Your post is Inserted',
            'alert-type' => 'success'
        );
    	return redirect()->route('about')->with($notification);

    }
//data insert method start 

    // blog data store method end 
    public function delete(Request $request){
			Post::where('id',$request->id )->delete();
            $notification = array(
                'message' => 'Your post Deleted',
                'alert-type' => 'error'
            );
    	return redirect()->route('about')->with($notification);


    }


//Comment store controller 

    public function comment_store(Request $request){

        $validateData= $request->validate([
            'user_comment'=>'required'


        ]);
            Comment::insert([

            'user_id'=>Auth::user()->id,
            'comment'=>$request->user_comment,
            'created_at'=>Carbon::now()

            ]);
            $notification = array(
                'message' => 'Your Comment posted',
                'alert-type' => 'info'
            );
        return redirect()->route('about')->with($notification);

    }
// end comment controller
}
