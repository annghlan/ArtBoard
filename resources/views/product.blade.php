@section('title')
Shopping Cart 
@endsection
@section('content')
<div class="container">

 <div style="text-align:center">
 @if(Session::has('success'))
 <div class="row">
 <div class="col-sm-6 col-md-4 col-md-offset-4 col-smoffset-3">
 <div id="charge-mission" class="alert alert-success">
 {{Session::get('success')}}
 </div>
 </div>
 </div>
 @endif
 @if(!Auth::check())
 <button type="button" class="btn btn-success" > Create your own 
T-shirt here </button> 
 @else 
 <button type="button" class="btn btn-success" > Create your 
own T-shirt here </button> 
 @endif
 </div>
 </br> </br>
 <div class="main-slider">
 <div id="myCarousel" class="carousel slide carousel-fade" dataride="carousel">
 <!-- Indicators -->
 <ol class="carousel-indicators">

 <li data-target="#myCarousel" data-slide-to="0" 
class="active"></li>
 <li data-target="#myCarousel" data-slide-to="1"></li>
 <li data-target="#myCarousel" data-slide-to="2"></li>
 <li data-target="#myCarousel" data-slide-to="3"></li>
 </ol>
 <!-- Carousel items -->
 <div class="carousel-inner">
 <!-- Slide 1 : Active -->
 <div class="item active">
 <img align="left" width=60% src="{{ 
URL::to('images/tshirtdesign1.jpg')}}" alt="">
 <img align="right" width=28% src="{{ 
URL::to('images/sale.png')}}" alt="">
 <div class="carousel-caption">
 <p> Get your sale today!! </p>
 </div>
 <!-- /.carousel-caption -->
 </div>
 <!-- /Slide1 -->
 <!-- Slide 2 -->
 <div class="item ">
 <div style="text-align:center"><img width=76% src= 
"{{ URL::to('images/tshirtdesign4.jpg')}}" alt=""> </div>
 <div class="carousel-caption">
 </div>
 <!-- /.carousel-caption -->

 </div>
 <!-- /Slide2 -->
 <!-- Slide 3 -->
 <div class="item ">
 <img align="left" width=40% src="{{ 
URL::to('images/shipping.png')}}" alt="">
 <img align="right" src="{{ 
URL::to('images/tshirtdesign2.jpg')}}" alt="">
 <div class="carousel-caption">
 </div>
 <!-- /.carousel-caption -->
 </div>
 <!-- /Slide3 -->
 <!-- Slide 4 -->
 <div class="item ">
 <img align="right" src="{{ 
URL::to('images/tshirtdesign3.jpg')}}" alt="">
 <img align="left" width=40% src="{{ 
URL::to('images/becreative.png')}}" alt="">
 <div class="carousel-caption">
 </div>
 <!-- /.carousel-caption -->
 </div>
 <!-- /Slide4 -->
 </div>
 <!-- /.carousel-inner -->
 <!-- Controls -->

 <div class="control-box">
 <a class="left carousel-control" href="#myCarousel" 
role="button" data-slide="prev">
 <span class="control-icon prev fa fa-chevron-left" 
aria-hidden="true"></span>
 <span class="sr-only">Previous</span>
 </a>
 <a class="right carousel-control" href="#myCarousel" 
role="button" data-slide="next">
 <span class="control-icon next fa fa-chevron-right" 
aria-hidden="true"></span>
 <span class="sr-only">Next</span>
 </a>
 </div>
 <!-- /.control-box -->
 </div>
 <!-- /#myCarousel -->
 </div>
 <!-- /.main-slider -->
</div>
<hr>
</br></br>
<div> </div>
<div class="container">
<div class="text-center">
@foreach($products->chunk(3) as $productChunk)
<div class="row">

 @foreach($productChunk as $product)
 <div class="col-sm-6 col-md-4">
 <div class="thumbnail">
 <img class ="img-responsive" style="top:9%; width:28%; 
height:48%;position:absolute;left:0; right:0; margin-left:auto; marginright:auto; "src="{{ $product->imagePath}}" alt="..."> 
 <img class ="img-responsive" style=" background-color: {{ 
$product->color }}" src="{{ URL::to('images/front.png')}}" alt="...">
 <div class="caption" >
 <div class="btn-group pull-right" data-toggle="buttons" 
>
 <label class="btn btn-default ">
 <input type="radio" name="size{{$product->id}}" 
value="S" > S
 </label>
 <label class="btn btn-default">
 <input type="radio" name="size{{$product->id}}" 
value="M"> M
 </label>
 <label class="btn btn-default">
 <input type="radio" name="size{{$product->id}}" 
value="L"> L
 </label>
 </div>
 <h3> {{$product->title}} </h3>
 <p>{{$product->description}} 
 <p> 

 <div class="clearfix">
 <div class="pull-left price"> $ {{$product->price}} 
</div>
 <a href="{{route('product.addtocart', ['id'=> 
$product->id ]) }}" class="btn btn-success pull-right" 
role="button">Add to Cart</a></p>
 </div>
 <br/>
 </div>
 </div>
 </div>
 @endforeach
</div>
@endforeach
@endsection
@section('scripts')
<script type="text/javascript" 
src="https://cdnjs.cloudflare.com/ajax/libs/jquerycookie/1.4.1/jquery.cookie.min.js"></script>
<script type='text/javascript'>
 $('input:radio').on('change', function() {
 if ($(this).val() === "S") {
 console.log('S');
 $.cookie("size", "S"); 
 } else if($(this).val() === "M"){
 console.log('M');
 $.cookie("size", "M"); 

 }
 else{
 console.log('L');
 $.cookie("size", "L"); 
 }
 
 });
</script>
<script>
 $(document).ready(function() {
 $('.carousel').carousel({
 interval: 2500
 })
 });
</script>
@endsection