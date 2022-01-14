<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostControl extends Controller
{
    function create(Request $request){
         DB::table('post')->insert([
            'name' => $request->input('name'),
            'image' => $request->input('image'),
            'content' => $request->input('content'),
            'price' => $request->input('price'),
        ]);
        return redirect()->back();
    }

    function delete($id) {
        DB::table('post')->where('id', $id)
        ->delete();

        return redirect()->back();
    }
}
