<?php

namespace App\Http\Controllers;
use Auth;
use DB;

use Illuminate\Http\Request;

class CustomController extends Controller
{
    public function index(Request $request){
        $user_id=Auth::id();
        $name=$request->name;
        $images=$request->file('image');
        $images->move("uploads",$images->getClientOriginalName().$name.'.png');
        
        DB::table("customs")->insert(
            ['user_id' => $user_id, 'image_path' => $images->getClientOriginalName().$name.'.png']

        );
        return response()->json(['status'=>'ok']);

    }
}
