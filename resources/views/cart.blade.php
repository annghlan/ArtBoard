<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Snippet - BBBootstrap</title>
                                <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <style>::-webkit-scrollbar {
                                  width: 8px;
                                }
                                /* Track */
                                ::-webkit-scrollbar-track {
                                  background: #f1f1f1; 
                                }
                                 
                                /* Handle */
                                ::-webkit-scrollbar-thumb {
                                  background: #888; 
                                }
                                
                                /* Handle on hover */
                                ::-webkit-scrollbar-thumb:hover {
                                  background: #555; 
                                } @import url('https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap');
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #f4f4f4;
}
.wrapper{
    max-width: 900px;
    margin: 20px auto;
    padding: 20px;
}
.h3{
    margin-bottom: 0;
}
div.text-uppercase{
    font-size: 0.8rem;
    font-weight: 600;
    letter-spacing: 0.1rem;
}
.btn#sub{
    font-size: 0.8rem;
    font-weight: 700;
    border: 1px solid #ddd;
}
.btn#sub:hover{
    background-color: #333;
    color: #FFF;
    border: 1ps solid #333;
}
.fa-cog{
    color: #a8a8a8;
    font-size: 0.8rem;
}
.ml-auto.btn:hover span{
    color: #333;
}
div.btn{
    padding: 8px 20px;
}
.notification{
    background-color: #54e346;
    padding: 0px 10px;
}
.notification button.btn{
    background-color: inherit;
    box-shadow: none;
}
.close{
    font-size: 1rem;
    font-weight: normal;
    opacity: 1;
}
.close:hover{
    color: #EEE;
}
.alert-dismissible .close{
    position: unset;
}
button:focus{
    outline: none;
}
.h4{
    margin: 0;
}
.editors{
    position: relative;
}
.editors img{
    object-fit: cover;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border: 5px solid #FFF;
}
#img1,#img2,#img3{
    position: absolute;
}
#img1{
    top: -15px;
    left: -50px;
}
#img2{
    top: -15px;
    left: -70px;
}
#img3{
    top: -15px;
    left: -90px;
}
div.text-muted{
    font-size: 0.9rem;
}
.table{
    overflow: hidden;
}
.table thead tr th{
    letter-spacing: 0.08rem;
    font-weight: normal;
}
.table tr td,
.table tr th{
    border: none;
    text-align: center;
}
.table.activitites thead{
    border-bottom: 1px solid #54e346;
    font-size: 0.8rem;
    font-weight: 700;
}
.table thead{
    font-size: 0.8rem;
    font-weight: 700;
}
.table.activitites{
    position: relative;
}
.table.activitites thead::after{
    position: absolute;
    content: "RECENT ACTIVITIES";
    background: #FFF;
    padding: 0px 8px;
    top: 38px;
    letter-spacing: 0.08rem;
    font-size: 0.6rem;
    color: #54e346;
    font-weight: 600;
}
.table tbody td.item{
    font-family: 'Dancing Script', cursive;
    font-size: 1.2rem;
    font-weight: 900;
    text-align: left;
}
del{
    font-size: 0.85rem;
}
.red{
    color: #ff0000;
}
div.new{
    font-size: 0.7rem;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: normal;
    letter-spacing: 0.08rem;
    background-color: #c7fdc3;
    color: #0e7504;
    display: inline-block;
}
.table tbody td.item img{
    width: 30px;
    height: 30px;
    object-fit: contain;
}
.table thead th.header{
    text-align: left;
}
.table tbody tr{
    padding-top: 10px;
    padding: 10px 20px;
    border-bottom: 1px solid #ccc;
    transition: all .4s ease-in-out;
}
.table tbody tr:last-child{
    border: none;
}
td .close,
td .btn{
    opacity: 0;
    background: #fff;
    font-weight: 600;
    font-size: 0.9rem;
}
.table tbody tr:hover{
    transform: scale(1.004);
    box-shadow: 2px 2px 10px #a5a5a5;
    cursor: pointer;
    overflow: hidden;
    scroll-behavior: unset;
}
.table tbody tr:hover .close{
    font-size: 1.5rem;
    opacity: 1;
}
.table tbody tr:hover .close:hover{
    color: #aaa;
}
.table tbody tr:hover .btn{
    border: 1px solid #ddd;
    opacity: 1;
    background: #fff;
}
a{
    font-size: 0.8rem;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-weight: normal;
    visibility: hidden;
}
a:hover{
    text-decoration: none;
}
.table tbody tr:hover a{
    visibility: visible;
}
#commentor2,#commentor3{
    position: absolute;
    object-fit: cover;
}
#commentor1{
    object-fit: cover;
}

#commentor2{
    top: 2px;
    left: 20px;
}
#commentor3{
    top: 2px;
    left: 35px;
}
.comments{
    visibility: visible;
}
hr.items{
    position: relative;
    margin: 0;
    margin-top: 10px;
}
hr.items:after{
    position: absolute;
    content: "ALL ITEMS";
    background: #FFF;
    top: -9px;
    padding: 0px 8px;
    letter-spacing: 0.08rem;
    font-size: 0.6rem;
    font-weight: 600;
}
.subtotal{
    border-bottom-left-radius: 50px;
    background-color: #ccc;
}
.tag,.fa-shoppping-cart{
    font-size: 0.5rem;
}
button.btn{
    background-color: inherit;
}
button.btn:hover{
    background-color: #cecccc;
    box-shadow: none;
    outline: none;
}
@media(max-width:760px){
    .table.activitites thead::after{
        top: 35px;
    }
}
@media(max-width:576px){
    .table.activitites thead::after{
        top: 55px;
    }
    #img1{
        top: -8px;
        left: 0px;
    }
    #img2{
        top: -8px;
        left: 15px;
    }
    #img3{
        top: -8px;
        left: 30px;
    }
    .editors img{
        width: 20px;
        height: 20px;
        border: 1px solid #FFF;
    }
}
@media(max-width:400px){
    .notification{
        font-size: 0.7rem;
    }
    .close{
        font-size: 0.7rem;
        font-weight: normal;
        opacity: 1;
    }
    .wrapper{
        padding: 10px;
    }
}</style>
                                </head>
                                <body className='snippet-body'>
                                <div class="wrapper">
        
        
        <div id="table" class="bg-white rounded">
            
            <hr>
            <div class="table-responsive">
                <table class="table activitites">
                    <thead>
                        <tr>
                            <th scope="col" class="text-uppercase header">item</th>
                            <th scope="col" class="text-uppercase">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $total=0;?>
                    <?php foreach($data as $cartItem){ ?>
                        <?php $total+=$cartItem->price;?>
                        <tr>
                            <td class="item">
                                <div class="d-flex">
                                    <img src="{{$cartItem->image}}"
                                        alt="">
                                    <div class="pl-2">
                                        {{$cartItem->name}}
                                        <div class="text-uppercase new"><span class="fas fa-star"></span>new</div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <div class="text-muted">{{$cartItem->size}}</div>
                                            
                                        </div>
                                    </div>
                            </td>
                            <td class="d-flex flex-column"><span class="red">NPR. {{$cartItem->price}}</span>
                            </td>
                            <td class="font-weight-bold">
                                <div class="close muni" data-id='{{$cartItem->id}}'>&times;</div>
                            </td>
                        </tr>
                        <?php } ?>

                        
                    </tbody>
                </table>
            </div>
        
            <div class="d-flex flex-column justify-content-end align-items-end">
                <div class="d-flex px-3 pr-md-5 py-1 subtotal">
                    <div class="px-4">Grand Total</div>
                    <div class="h5 font-weight-bold px-md-2">NPR <?php echo $total;?></div>
                </div>
                
            </div>
        </div>
    </div>
                                <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript'>#</script>
                                <script type='text/javascript'>var myLink = document.querySelector('a[href="#"]');
                                myLink.addEventListener('click', function(e) {
                                  e.preventDefault();
                                });</script>

<script>
$(".muni").on("click", function (e){
var token = "{{ csrf_token() }}";

$.ajax({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
        url  : "/cart/delete",
        type : "POST",
        dataType:  "JSON",
        data : {id:$(this).attr("data-id"),'_token':token},
        success : function ( response ){
            window.location.href = "/cart"
           
        }
    })
});
</script>
                            
                                </body>
                            </html>