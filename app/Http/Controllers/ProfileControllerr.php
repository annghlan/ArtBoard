<?php

namespace App\Http\Controllers;
use App\Models\Users; //<databse

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    Public function profile(Request $request){
    //
    $profile =Users::all(); //clothes table bata data tanera viwe garauxa
        return view('customer.profile',['profile'=>$profile]);  
    }
}
