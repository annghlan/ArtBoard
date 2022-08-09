<?php
namespace App\Http\Controllers;
use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Session;
use Stripe\Stripe;
use Stripe\Charge;
use App\Order;
use Auth;
use App\Shippinginfo;
use Mail;
use Log;
use DB;
class ProductController extends Controller
{
 public function getIndex(){
 $products = Product::all();
 return view('product', ['products' => $products] );
 }
 public function getAddtocart( Request $request, $id){
 $product = Product::find($id);
 $oldCart = $request->session()->has('cart') ? $request->session()->get('cart') : null;
 $cart = new Cart($oldCart);
 $request->session()->put('cart', $cart);
 $size = $request->cookie('size');
 $cart->add($product, $product->id, $size);
 return redirect()->route('product.index');
 }
public function getRemoveItem($id) {
 $oldCart = Session::has('cart') ? Session::get('cart') : null;
 $cart = new Cart($oldCart);
 $cart->removeItem($id);
 if (count($cart->items) > 0) {
 Session::put('cart', $cart);
 } else {
 Session::forget('cart');
 }
 return redirect()->route('product.shopping-cart');

 }
 public function getCart(){
 if(!Session::has('cart')){
 return view('shop.shopping-cart');
 } 
 $oldCart = Session::get('cart');
 $cart = new Cart($oldCart);
 return view('shop.shopping-cart', ['products'=> $cart->items, 
'totalPrice' => $cart->totalPrice]);
 }
 public function getCheckout(){
 if(!Session::has('cart')){
 return view('shop.shopping-cart');
 }
 $oldCart = Session::get('cart');
 $cart = new Cart($oldCart);
 $total = $cart->totalPrice;
 return view('shop.checkout', ['total' => $total]);
 }
 public function postCheckout(Request $request){
 if(!Session::has('cart')){
 return redirect()->route('shop.shopping-cart');
 }
 $oldCart = Session::get('cart');
 $cart = new Cart($oldCart);
 $shippinginfo = new Shippinginfo();
 $shippinginfo->address = $request->input('shippingaddress');

 $shippinginfo->city = $request->input('city');
 $shippinginfo->state =$request->input('state');
 $shippinginfo->zip =$request->input('zipcode');
 Stripe::setApikey('sk_test_wUvdtaSqyINkJ1ZbcPcJUmjo');
 try{
 $charge = Charge::create(array(
 "amount" => $cart->totalPrice *100,
 "currency" => "usd",
 "source" => $request->input('stripeToken'),
 "description" => "Test Charge"
 ));
 $order->cart = serialize($cart);
 $order->address = $request->input('address');
 $order->name = $request->input('name');
 $order->payment_id = $charge->id;
 if(Auth::user()->orders()->save($order)){
 $shippinginfo->payment_id = $order->payment_id;
 Auth::user()->shippinginfos()->save($shippinginfo);
 $data = array();
 $data['address'] = $shippinginfo->address;
 $data['city'] = $shippinginfo->city;
 $data['state'] = $shippinginfo->state;
 $data['zip'] = $shippinginfo->zip;
 $data['payment_id'] = $order->payment_id;
 $data['totalprice'] = $cart->totalPrice ;
 $data['name'] = $order->name; 
 Mail::send('mail', $data, function($message) {

 $message->to(Auth::user()['email'], 'Customer')
 ->subject ('Your order has been placed');
 $message->from('khranjan@gmail.com',
 'Custom T-shirt Design ');
 $message->cc('khranjan@gmail.com', 
 'Custom T-shirt Design');
 });
 $userId = Auth::id();
 $data['files'] = serialize($cart);
 $designcolors = array();
 foreach($cart->items as $item){
 array_push($designcolors, DB::table('designs')
 ->where('Designname', $item['item']['title']) 
 ->value('Tshirtcolor'));
 }
 $data['colors'] = serialize($designcolors);
 Mail::send('mail', $data, function($message) 
 use ($cart, $userId) {
 $message->to('khranjan@gmail.com', 'Sales')->subject
 ('Ready for Order Design- Attachment');
 $message->from('khranjan@gmail.com',
 'Custom T-shirt Design ');
 foreach($cart->items as $item){
 $designpath = DB::table('designs')->where(
 'Designname', $item['item']['title'])
 ->value('Designpath');
 $message->attach( $designpath);
 }
 });
 }
 }catch(\Exception $e){
 return redirect()->route('checkout')->with('error', $e->getMessage());
 }
 Session::forget('cart');
 return redirect()->route('product.index')->with('success', 
'Successfully purchased');
 }
}
