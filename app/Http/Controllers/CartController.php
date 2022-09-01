<?php

namespace App\Http\Controllers;
use Auth;
use DB;
use App\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        if (Auth::check()) {
            $user_id=Auth::id();
        $cart_items=Cart::join("clothes", "clothes.id", "=", "carts.product_id")->where("carts.user_id", $user_id)->get();
        return view('cart',['data'=>$cart_items]);
        }

        else{
            return redirect("/");
        }
        


    }
    public function create(Request $request){
        $user_id=Auth::id();
        $product_id=$request->id;
        
        $cart_items=Cart::where("user_id", $user_id)->where("product_id", $product_id)->get();
        if (count($cart_items)>0){
            return response()->json(['status'=>'Already added in cart.']);
        }
        else{
            DB::table("carts")->insert(
                ['product_id' => $product_id, 'user_id' => $user_id]
    
            );
            return response()->json(['status'=>'ok']);
        }

        

    }
    public function delete(Request $request){
        $product_id=$request->id;
        $user_id=Auth::id();
        $cart_items=Cart::where("user_id", $user_id)->where("product_id", $product_id)->delete();

        return response ()->json(['status'=>'ok']);





    }
}
