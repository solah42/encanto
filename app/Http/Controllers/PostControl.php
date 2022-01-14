<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostControl extends Controller
{
    function create(Request $request){
        if($request->method() == 'POST'){
            $originName = $request->file('image')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
            $request->file('image')->move(public_path('img/'), $fileName);
            $img = 'img/'.$fileName;

            DB::table('post')->insert([
            'name' => $request->input('name'),
            'image' => $img,
            'content' => $request->input('content'),
            'price' => $request->input('price'),
            'user_id' => $request->input('user_id'),
            ]);
            return redirect()->back();
        }else{
            return view('create');
        }

    }

    function delete($id) {
        DB::table('post')->where('id', $id)
        ->delete();

        return redirect()->back();
    }

    function show(){
        $post = DB::table('post')
        ->get();
/*         dd($post); */
        return view('manage',compact('post'));
    }

    function showId($id){
        $post = DB::table('post')
        ->where('id',$id)
        ->first();
        $comment = DB::table('comment')
        ->where('post_id',$id)
        ->get();

  /*       dd($comment); */
        return view('listhotel',compact('post','comment'));
    }

    function comment(Request $request){
        DB::table('comment')
        ->insert([
            'comment' => $request->input('comment'),
            'post_id' => $request->input('post_id'),
            ]);
        return redirect()->back();
    }

    function showUser(){
        $post = DB::table('post')
        ->get();
        return view('showhotel',compact('post'));
    }

    function commentCreate(Request $request){
        DB::table('post')->insert([
            'comment' => $request->input('name'),
            'post_id' => $request->input('post_id'),
            ]);
    }
}
