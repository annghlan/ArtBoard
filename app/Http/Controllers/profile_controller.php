<?php

namespace App\Http\Controllers;
use Auth;
use DB;

use Illuminate\Http\Request;

class profile_controller extends Controller
{
    public function index(){
      if (Auth::check()){
      $user=Auth::user();
      $custom_table=DB::table('customs')->where("user_id","=",  Auth::id())->get();
      return view('customer.profile',['user'=>$user, 'customs'=>$custom_table]);
      }
      else{
        return redirect("/");
    }


    }
}
