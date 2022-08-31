<?php

namespace App\Http\Controllers;
use App\Models\User; //<databse

use Illuminate\Http\Request;

class profile_controller extends Controller
{
    //
      Users::all(); //clothes table bata data tanera viwe garauxa
        return view('products',['clothes'=>$clothes]);  
}
