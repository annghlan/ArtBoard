<?php

namespace App\Http\Controllers;

use App\Models\Clothes; //<databse
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function products(Request $request)
    
    {
        
        $clothes = Clothes::all(); //clothes table bata data tanera viwe garauxa
        return view('products',['clothes'=>$clothes]);  
    }

}
