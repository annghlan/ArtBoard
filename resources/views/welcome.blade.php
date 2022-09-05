<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Shopbuy T-shirt Custom</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="img/casual-t-shirt-.png"/>
    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if IE]>
    <script type="text/javascript" src="{{ asset('js/excanvas.js')}}"></script><![endif]-->

    

    <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/templatemo.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/custom.css')}}">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="{{URL::asset('assets/css/fontawesome.min.css')}}">
<!--
    
    

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/fabric.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/tshirtEditor.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.miniColors.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/html5.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/loading.js')}}"></script>
    <script type="text/javascript"
            src="https://cdn.rawgit.com/eligrey/FileSaver.js/5733e40e5af936eb3f48554cf6a8a7075d71d18a/FileSaver.js"></script>
    <!-- Le styles -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/jquery.miniColors.css')}}"/>
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href=" {{ asset('css/loader.css')}}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-responsive.min.css')}}" rel="stylesheet">

    <script type="text/javascript">
    </script>
    <style type="text/css">
        .footer {
            padding: 70px 0;
            margin-top: 70px;
            border-top: 1px solid #E5E5E5;
            background-color: whiteSmoke;
        }

        body {
            padding-top: 60px;
        }

        .color-preview {
            border: 1px solid #CCC;
            margin: 2px;
            zoom: 1;
            vertical-align: top;
            display: inline-block;
            cursor: pointer;
            overflow: hidden;
            width: 20px;
            height: 20px;
        }

        .rotate {
            -webkit-transform: rotate(90deg);
            -moz-transform: rotate(90deg);
            -o-transform: rotate(90deg);
            /* filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=1.5); */
            -ms-transform: rotate(90deg);
        }

        .Arial {
            font-family: "Arial";
        }

        .Helvetica {
            font-family: "Helvetica";
        }

        .MyriadPro {
            font-family: "Myriad Pro";
        }

        .Delicious {
            font-family: "Delicious";
        }

        .Verdana {
            font-family: "Verdana";
        }

        .Georgia {
            font-family: "Georgia";
        }

        .Courier {
            font-family: "Courier";
        }

        .ComicSansMS {
            font-family: "Comic Sans MS";
        }

        .Impact {
            font-family: "Impact";
        }

        .Monaco {
            font-family: "Monaco";
        }

        .Optima {
            font-family: "Optima";
        }

        .HoeflerText {
            font-family: "Hoefler Text";
        }

        .Plaster {
            font-family: "Plaster";
        }

        .Engagement {
            font-family: "Engagement";
        }

     

        .img-polaroid {
            padding: 0;
            margin: 0;
            border: 2px solid transparent;
            max-height: 92px;
            max-width: 92px;
            min-height: 92px;
            min-width: 92px;

        }

        .img-polaroid:hover {
            cursor: pointer;
            border-color: #00a5f7;
        }

        .tt {
            margin-right: 4px;
        }

        .navbar .container {
    width: 100% !important;
}
.navbar .nav>li>a {
    font-family: 'Roboto', sans-serif !important;
    color: #212934 !important;
}
.navbar li {
    padding-right: 100px !important;
}
a.nav-link:hover {
    background: transparent !important;
    color: green !important;
}
.navbar .nav>li>a:hover {
    color: green !important;

}
    </style>
</head>

<body style="padding-top:0 !important;">
    
    <!-- Start Top Nav -->
    <nav style="margin-bottom:0 !important" class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">ts@shopbuy.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">9860926926</a>
                </div>
                <div>
                    <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>

                </div>
            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->


    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container">
        <div style="display: flex;justify-content: space-between !important;width: 100%;max-width: 100%;" >

            <a class="navbar-brand text-success logo h1 align-self-center" href="{{ url('/')}}">
                SHOPBUY
            </a>

            <!-- <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->

            <div style="display: flex;align-items: center;justify-content: space-between;">
                <div style="padding-right: 50px;">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto" style="padding-right: 100px;">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/products')}}">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Custom Your Design</a>
                        </li>
                      
                    </ul>
                </div>
                <!--
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                        </div>
                    </div>
                    <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                        <i class="fa fa-fw fa-search text-dark mr-2"></i>
                    </a>
-->
                    <a class="nav-icon position-relative text-decoration-none" style="padding-right: 20px;" href="/cart">
                        <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1" style="font-size: 25px;"></i>
                       
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="#">
                        <i class="fa fa-fw fa-user text-dark mr-3" style="font-size: 25px;"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
    </nav>

    <!-- Close Header -->


<!-- <a class="navbar-brand text-success logo h1 align-self-center" href="{{ url('/')}}">SHOPBUY</a> -->


<div class="container">
    <section id="typography">
        <div class="page-header">
            <h2>Custom Yours</h2>
        </div>

        <!-- Headings & Paragraph Copy -->
        <div class="row">
            <div class="span3">

                <div class="tabbable"> <!-- Only required for left/right tabs -->
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab1" data-toggle="tab">T-shirt parameters</a></li>
                        <li><a href="#tab2" data-toggle="tab">Custom T-shirt</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">
                            <div class="well">
                                <p style="font-family: 'Telex',sans-serif;font-weight: bold;line-height: 1;color: #317eac;text-rendering: optimizelegibility;">
                                    T-shirt style</p>
                                <select id="shirtstyle" class="form-control">
                                    @foreach($shirts as $shirt)
                                        <option value="{{ $shirt->image }}">{{ $shirt->name }}</option>
                                        @endforeach
                                </select>
                                
                                <!-- camera wala icon-->
                            </div>
                            <div class="well">
                                <p style="font-family: 'Telex',sans-serif;font-weight: bold;line-height: 1;color: #317eac;text-rendering: optimizelegibility;">
                                    Click the icon</p>
                                <button id="risi" class="btn btn-primary" title="Save as image"><i
                                            style="font-size: 25px;"
                                            class="fa fa-save"
                                            aria-hidden="true"></i></button>
                                <button id="imgsavepdf" class="btn btn-primary" title="Save as PDF"><i
                                            style="font-size: 25px;"
                                            class="fa fa-file-pdf-o"
                                            aria-hidden="true"></i></button>
                                <button id="rotate" title="Return" class="btn btn-primary"><i
                                            style="font-size: 25px;"
                                            class="fa fa-repeat"
                                            aria-hidden="true"></i></button>
                                <button class="btn btn-primary" onclick="location.reload();" title="Delete everything"><i
                                            style="font-size: 25px;"
                                            class="fa fa-trash"
                                            aria-hidden="true"></i></button>

                            </div>


                            <!-- add text wala -->
                        </div>
                        <div class="tab-pane" id="tab2">
                            <div class="well">
                                <h4>Text</h4>
                                <div class="input-append">
                                    <input class="span2" id="text-string" type="text"
                                           placeholder="Add texthere ...">
                                    <button id="add-text" class="btn" title="Add"><i class="icon-share-alt"></i>
                                    </button>
                                    <hr>
                                </div>
                                <h4>Chose a prints
                                    <form hidden id="form1" runat="server">
                                        <input hidden type='file' id="imgInp"/>
                                    </form>
                                    <button id="addimg" class="btn btn-primary"><i style="font-size: 15px;"
                                                                                   class="fa fa-plus"
                                                                                   aria-hidden="true"></i></button>
                                </h4>

                                <!-- prints -->
                                <div id="avatarlist" style="max-height: 500px; overflow: scroll;">
                                    @foreach($prints as $image)
                                        <img class="img-polaroid tt" src="{{ asset('img/templates/') }}/{{$image->image}}">
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- font haru text add garna ts ma -->
            <div class="span6">
                <div align="center" style="min-height: 32px;">
                    <div class="clearfix">
                        <div class="btn-group inline pull-left" id="texteditor" style="display:none">
                            <button id="font-family" class="btn dropdown-toggle" data-toggle="dropdown"
                                    title="Font Style"><i class="icon-font" style="width:19px;height:19px;"></i>
                            </button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="font-family-X">
                                <li><a tabindex="-1" href="#" onclick="setFont('Arial');" class="Arial">Arial</a></li>
                                <li><a tabindex="-1" href="#" onclick="setFont('Helvetica');" class="Helvetica">Helvetica</a>
                                </li>
                                <li><a tabindex="-1" href="#" onclick="setFont('Myriad Pro');" class="MyriadPro">Myriad
                                        Pro</a></li>
                                <li><a tabindex="-1" href="#" onclick="setFont('Delicious');" class="Delicious">Delicious</a>
                                </li>
                                <li><a tabindex="-1" href="#" onclick="setFont('Verdana');" class="Verdana">Verdana</a>
                                </li>
                                <li><a tabindex="-1" href="#" onclick="setFont('Georgia');" class="Georgia">Georgia</a>
                                </li>
                                <li><a tabindex="-1" href="#" onclick="setFont('Courier');" class="Courier">Courier</a>
                                </li>
                                <li><a tabindex="-1" href="#" onclick="setFont('Comic Sans MS');" class="ComicSansMS">Comic
                                        Sans MS</a></li>
                                <li><a tabindex="-1" href="#" onclick="setFont('Impact');" class="Impact">Impact</a>
                                </li>
                                <li><a tabindex="-1" href="#" onclick="setFont('Monaco');" class="Monaco">Monaco</a>
                                </li>
                                <li><a tabindex="-1" href="#" onclick="setFont('Optima');" class="Optima">Optima</a>
                                </li>
                                <li><a tabindex="-1" href="#" onclick="setFont('Hoefler Text');" class="Hoefler Text">Hoefler
                                        Text</a></li>
                                <li><a tabindex="-1" href="#" onclick="setFont('Plaster');" class="Plaster">Plaster</a>
                                </li>
                                <li><a tabindex="-1" href="#" onclick="setFont('Engagement');" class="Engagement">Engagement</a>
                                </li>
                            </ul>
                            <!-- bold ,iatlic option harukolagi -->
                            <button id="text-bold" class="btn" data-original-title="Bold"><img src="img/font_bold.png"
                                                                                               height="" width="">
                            </button>
                            <button id="text-italic" class="btn" data-original-title="Italic"><img
                                        src="img/font_italic.png" height="" width=""></button>
                            <button id="text-strike" class="btn" title="Strike" style=""><img
                                        src="img/font_strikethrough.png" height="" width=""></button>
                            <button id="text-underline" class="btn" title="Underline" style=""><img
                                        src="img/font_underline.png"></button>
                            <a class="btn" href="#" rel="tooltip" data-placement="top" data-original-title="Font Color"><input
                                        type="hidden" id="text-fontcolor" class="color-picker" size="7" value="#000000"></a>
                            <a class="btn" href="#" rel="tooltip" data-placement="top"
                               data-original-title="Font Border Color"><input type="hidden" id="text-strokecolor"
                                                                              class="color-picker" size="7"
                                                                              value="#000000"></a>
                            <!--- Background <input type="hidden" id="text-bgcolor" class="color-picker" size="7" value="#ffffff"> --->
                        </div>

                        <!-- ts ko back front view part -->
                        <div class="pull-right" align="" id="imageeditor" style="display:none">
                            <div class="btn-group">
                                <button class="btn" id="bring-to-front" title="Bring to Front"><i
                                            class="icon-fast-backward rotate" style="height:19px;"></i></button>
                                <button class="btn" id="send-to-back" title="Send to Back"><i
                                            class="icon-fast-forward rotate" style="height:19px;"></i></button>
                                <button id="flip" type="button" class="btn" title="Show Back View"><i
                                            class="icon-retweet" style="height:19px;"></i></button>
                                <button id="remove-selected" class="btn" title="Delete selected item"><i
                                            class="icon-trash" style="height:19px;"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
<!--	ts ko white wala style garya    -->
                <div id="shirtDiv" class="page"
                     style="width: 530px; height: 630px; position: relative; background-color: rgb(255, 255, 255);">
                    <!--img id="tshirtFacing" src="img/crew_front.png"></img-->
                    <img id="tshirtFacing" src="img/t-shirts/crew_front.png"></img>

<!-- canvas area -->
                    <div id="drawingArea"
                         style="position: absolute;top: 100px;left: 160px;z-index: 10;width: 200px;height: 400px;">
                        <canvas id="tcanvas" width=200 height="400" class="hover"
                                style="-webkit-user-select: none;"></canvas>
                    </div>
                </div>

            </div>
 <!-- ts ko lagi  color -->

            <div class="span3">
                <div class="well">
                    <ul class="nav">
                        <h3>Chose a color</h3>
                        @foreach($colors as $color)
                            <li class="color-preview" title="{{$color->name}}"
                                style="background-color:{{$color->color}};"></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div id="editor"></div>
    </section>
</div><!-- /container -->
<!--
<footer class="footer" id="footer" style="background-color: #333333; color: white; text-align: center; font-size: 20px;">
        <div class="footer-bottom">
            <div class="container text-center">
                <a href="#">
                <p class="Verdana">Для оформлення індивідуальних замовлень пишіть на електронну адресу: <i class="fa fa-envelope"></i> trymbati@gmail.com</p>
                <p class="Verdana"> Природничо-гуманітарний коледж © 2018. Всі права захищені.</p>
                </a>
            </div>

</footer>
<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/0.9.0rc1/jspdf.min.js"></script>

<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-35639689-1']);
    _gaq.push(['_trackPageview']);

    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();

    $(document).ready(function () {

        /*******************************************************************************/
        function getContentImage() {
            html2canvas(document.querySelector("#shirtDiv")).then(canvas => {
                // document.body.appendChild(canvas)
                $(canvas).get(0).toBlob(function (blob) {
                var urlCreator = window.URL || window.webkitURL;
                var imageUrl = urlCreator.createObjectURL(blob);
                $('#test').append('<img src="' + imageUrl + '"><br>');

            });
        })
            ;
        }

        function LoadeShirts() {
            $('.loading-blink').loading();
            $('.loading-blink').show();
            getContentImage();

            setTimeout(function () {
                rotate();
            }, 500);
            setTimeout(function () {
                getContentImage();
            }, 1200);
        }

        /*******************************************************************************/


        $('#loading-custom-overlay').loading({
            overlay: $('#custom-overlay')
        });
        $('.loading-blink').hide();

        $('#risi').on('click', function () {
            function save() {
                html2canvas(document.querySelector("#shirtDiv")).then(canvas => {
                    document.body.appendChild(canvas)
                    $(canvas).get(0).toBlob(function (blob) {
                    var name= "id" + Math.random().toString(16).slice(2)
                    var filesaver = saveAs(blob, name+".png");
                    var token = "{{ csrf_token() }}";
                    var fd = new FormData();

                    fd.append('image', blob);
                    fd.append('name', name);
                    fd.append('_token', token);

                    $.ajax({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
        url  : "/save/custom",
        type : "POST",
        dataType:  "JSON",
        data : fd,
        processData: false,
        contentType: false,
        success : function ( response ){
            // window.location.href = "/cart"
           
        }
    })




                    
                    filesaver.onwriteend = function () {
                        $('.loading-blink').hide();
                        $('#test').empty();
                    }


                });
            });
                
            }

            LoadeShirts();
            setTimeout(function () {
                save();
            }, 1700);

        });

        $('#rotate').click(function (e) {
            e.preventDefault();
            rotate();
        });

        function rotate() {
            $('#flip').click();
        }

        $("#addimg").on('click', function () {
            $('#imgInp').click();
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#avatarlist').append('<img class="img-polaroid tt" src="' + e.target.result + '">');
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInp").change(function () {
            readURL(this);
        });

        $('#shirtstyle').on('change', function () {
            $('#tshirtFacing').attr("src", "img/t-shirts/" + $(this).val() + "_front.png");
            IMAGE_NAME = $(this).val();
        });

        $('#imgsavepdf').on('click', function () {
            $('.loading-blink').loading();
            $('.loading-blink').show();
            var doc = new jsPDF();
            doc.setFontSize(20);

            setTimeout(function () {
                html2canvas(document.querySelector("#shirtDiv")).then(canvas => {
                    function convertCanvasToImage(c)
                {
                    var image = new Image();
                    image.src = c.toDataURL("image/jpeg");
                    doc.addImage(image.src, 'JPEG', 30, 5, 145, 145);
                    return image;
                }
                convertCanvasToImage(canvas);

            })
                ;
            }, 100);
            setTimeout(function () {
                rotate();

            }, 700);
            setTimeout(function () {
                html2canvas(document.querySelector("#shirtDiv")).then(canvas => {
                    function convertCanvasToImage(c)
                {
                    var image = new Image();
                    image.src = c.toDataURL("image/jpeg");
                    doc.addImage(image.src, 'JPEG', 30, 150, 145, 145);
                    return image;
                }
                convertCanvasToImage(canvas);
            })
                ;
            }, 1100);
            setTimeout(function () {
                doc.save("T-Shirt.png");
                $('.loading-blink').hide();
                $('#test').empty();
            }, 1700);

        });

    });
    

</script>
<div style="position: fixed;top: 0;left: 0;width: 100%;height: 100%;z-index:999999;" id="loading-custom-overlay"
     class="loading-div loading-blink">
    <div id="custom-overlay">
        <div class="loading-spinner">
            Loading (custom)...
        </div>
    </div>
</div>
</body>
</html>