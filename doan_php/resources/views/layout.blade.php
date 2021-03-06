<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SLAMDUNK SHOP</title>
    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"
    ></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                 <li><a href="#"><i class="fa fa-phone"></i> + 028 38 097986</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> info@slamdunkshop.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->
        
        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="logo pull-left">
                            <a href="{{URL::to('/trangchu')}}"><img src="{{('public/frontend/images/thethao/logo11.jpg')}}" alt="" /></a>
                        </div>
                        
                    </div>
                    <div class="col-sm-10">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-user"></i> T??i kho???n</a></li>
                                <li><a href="#"><i class="fa fa-star"></i> S???n ph???m Th??m y??u th??ch</a></li>
                                <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> ????ng xu???t</a></li>
                                <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Gi??? h??ng</a></li>
                                <li><a href="{{URL::to('admin/login')}}"><i class="fa fa-lock"></i> ????ng nh???p</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->
    
        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="{{URL::to('/trangchu')}}" class="active">Trang ch???</a></li>
                                <li class="dropdown"><a href="#">S???n ph???m ????? th??? thao<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">C??c lo???i s???n ph???m</a></li>
                                        <li><a href="product-details.html">Chi ti???t s???n ph???m</a></li> 
                                        <li><a href="checkout.html">????ng xu???t</a></li> 
                                        <li><a href="cart.html">Gi??? h??ng</a></li> 
                                        <li><a href="{{URL::to('admin/login')}}">????ng nh???p</a></li> 
                                    </ul>
                                </li> 
                                <li class="dropdown"><a href="#">Gi???i thi???u<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Slamdunk_shop</a></li>
                                        <li><a href="blog-single.html">Th??? gi???i th??? thao</a></li>
                                    </ul>
                                </li> 
                                <li><a href="404.html">Gi??? h??ng</a></li>
                                <li><a href="contact-us.html">Li??n h???</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 input-group input-group-lg">
                        <input type="text" class="form-control" placeholder="T??m ki???m" />
                        <span class="input-group-btn">
                            <button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                        </span>
                    </div>  
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->
    
    <section id="slider"><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>
                        
                        <div class="carousel-inner">
                            <div class="item active">                               
                                <div class="col-sm-6">
                                    <h1><span>TH??? THAO </span>-STRONGER</h1>
                                    <h2>Mi???n ph?? giao h??ng tr??n ?????a b??n Th??nh ph??? H??? Ch?? Minh.</h2>
                                    <p>C?? t??nh n??ng ?????ng</p>
                                    <button type="button" class="btn btn-default get">Mua ngay!</button>
                                </div>
                                <div class="col-sm-6" >
                                    <img src="{{('public/frontend/images/thethao/nam0.jpg')}}" class="girl img-responsive" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>TH??? THAO </span>-STRONGER</h1>
                                    <h2>Mi???n ph?? giao h??ng tr??n ?????a b??n Th??nh ph??? H??? Ch?? Minh.</h2>
                                    <p>C?? t??nh n??ng ?????ng</p>
                                    <button type="button" class="btn btn-default get">Mua ngay!</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{('public/frontend/images/thethao/nu5.jpg')}}" class="girl img-responsive" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>TH??? THAO </span>-STRONGER</h1>
                                    <h2>Mi???n ph?? giao h??ng tr??n ?????a b??n Th??nh ph??? H??? Ch?? Minh.</h2>
                                    <p>C?? t??nh n??ng ?????ng</p>
                                    <button type="button" class="btn btn-default get">Mua ngay!</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{('public/frontend/images/thethao/nam1.jpg')}}" class="girl img-responsive" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                   <h1><span>TH??? THAO </span>-STRONGER</h1>
                                   <h2>Mi???n ph?? giao h??ng tr??n ?????a b??n Th??nh ph??? H??? Ch?? Minh.</h2>
                                    <p>C?? t??nh n??ng ?????ng</p>
                                    <button type="button" class="btn btn-default get">Mua ngay!</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{('public/frontend/images/thethao/nu4.jpg')}}" class="girl img-responsive" alt="" />
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="col-sm-6">
                                   <h1><span>TH??? THAO </span>-STRONGER</h1>
                                    <h2>Mi???n ph?? giao h??ng tr??n ?????a b??n Th??nh ph??? H??? Ch?? Minh.</h2>
                                    <p>C?? t??nh n??ng ?????ng</p>
                                    </p>
                                    <button type="button" class="btn btn-default get">Mua ngay!</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{('public/frontend/images/thethao/giay3.jpg')}}" class="girl img-responsive" alt="" />
                                </div>
                            </div>
                            
                        </div>
                        
                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section><!--/slider-->
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>DANH S??CH C??C S???N PH???M</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#HoaHong">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            TH??? THAO NAM
                                        </a>
                                    </h4>
                                </div>
                                <div id="HoaHong" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="#">??o kho??c nam </a></li>
                                            <li><a href="#">????? b??ng r??? </a></li>
                                            <li><a href="#">????? b??ng ????</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#HoaLy">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            TH??? THAO N???
                                        </a>
                                    </h4>
                                </div>
                                <div id="HoaLy" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="#">??o kho??c n???</a></li>
                                            <li><a href="#">????? th??? thao n???</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#CamTu">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            C??C LO???I B??NG
                                        </a>
                                    </h4>
                                </div>
                                <div id="CamTu" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="#">B??ng chuy???n</a></li>
                                            <li><a href="#">B??ng ????</a></li>
                                            <li><a href="#">B??ng r???</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#HoaLan">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            Xe ?????p
                                        </a>
                                    </h4>
                                </div>
                                <div id="HoaLan" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="#">Xe ?????a h??nh</a></li>
                                            <li><a href="#">Xe Cu???c</a></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#HuongDuong">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                           C??C LO???I GI??Y
                                        </a>
                                    </h4>
                                </div>
                                <div id="HuongDuong" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="#">Nike</a></li>
                                            <li><a href="#">Adidas</a></li>
                                            <li><a href="#">Fuma</a></li>
                                            <li><a href="#">New Balance</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><!--/Danh m???c c??c lo??i hoa-->
                    
                        <div class="brands_products"><!--brands_products-->
                            <h2>S???N PH???M THEO H??NG</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="#"> <span class="pull-right">(50)</span>NIKE</a></li>
                                    <li><a href="#"> <span class="pull-right">(20)</span>ADIDAS</a></li>
                                    <li><a href="#"> <span class="pull-right">(20)</span></a>NEW BALANCE</li>
                                    <li><a href="#"> <span class="pull-right">(30)</span>BITIS </a></li>
                                    <li><a href="#"> <span class="pull-right">(15)</span>FUMA</a></li>
                                </ul>
                            </div>
                        </div><!--/brands_products-->
                        
                        <div class="price-range"><!--price-range-->
                            <h2>T??m gi?? trong ph???m vi</h2>
                            <div class="well text-center">
                                 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                                 <b class="pull-left">200.000 ??</b> <b class="pull-right">2.000.000 ??</b>
                            </div>
                        </div><!--/price-range-->
                        
                        <div class="shipping text-center"><!--shipping-->
                            <img src="{{('public/frontend/images/thethao/logo3.jpg')}}" alt="" />
                        </div><!--/shipping-->
                    
                    </div>
                </div>
                
                <div class="col-sm-9 padding-right">
                    
                    
                  @Yield('content')
                    
                    
                </div>
            </div>
        </div>
    </section>
    
    <footer id="footer"><!--Footer-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="companyinfo">
                            <h2><span>SLAM DUNK</span>-shopper</h2>
                            <p>Ch??ng t??i s???n s??ng ph???c v??? qu?? kh??ch 24/7.<br> V???i c??c lo???i s???n ph???m ??a d???ng v?? r??? nh???t!</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{('public/frontend/images/thethao/bong1.jpg')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>K??? ni???m sinh nh???t</p>
                                <h2>16 DEC 2020</h2>
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{('public/frontend/images/thethao/giay2.jpg')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Ng??y Valentine</p>
                                <h2>14 FEB 2020</h2>
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{('public/frontend/images/thethao/ao11.jpg')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Ch??c m???ng</p>
                                <h2>22 AUG 2020</h2>
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{('public/frontend/images/thethao/ao8.jpg')}}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Ng??y Ph??? n???</p>
                                <h2>08 MARCH 2020</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="address">
                            <img src="{{('public/frontend/images/thethao/logo2.jpg')}}" alt="" />
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>D???ch v??? h??? tr???</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Tr??? gi??p online</a></li>
                                <li><a href="#">Li??n h???</a></li>
                                <li><a href="#">T??nh tr???ng ????n h??ng</a></li>
                                <li><a href="#">Thay ?????i n??i nh???n</a></li>
                                <li><a href="#">C??c c??u h???i th?????ng g???p</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>T??m ki???m nhanh</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Th??? thao nam</a></li>
                                <li><a href="#">Th??? thao n???</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Ch??nh s??ch</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">??i???u kho???n s??? d???ng</a></li>
                                <li><a href="#">Ch??nh s??ch b???o m???t</a></li>
                                <li><a href="#">Ch??nh s??ch ho??n l???i ti???n</a></li>
                                <li><a href="#">H??? th???ng thanh to??n</a></li>
                                <li><a href="#">Ch??nh s??ch khuy???n m??i</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Gi???i thi???u</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Th??ng tin c??ng ty</a></li>
                                <li><a href="#">Tuy???n d???ng</a></li>
                                <li><a href="#">V??? tr?? c???a h??ng</a></li>
                                <li><a href="#">Ch????ng tr??nh khuy???n m??i</a></li>
                                <li><a href="#">Quy???n l???i kh??ch h??ng</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>Li??n h??? ch??ng t??i</h2>
                            <form action="#" class="searchform">
                                <input type="text" placeholder="?????a ch??? email" />
                                <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                                <p>H??y nh???n c??c b???n c???p nh???t g???n ????y nh???t t??? trang web c???a ch??ng t??i 
                                v?? h??y c???p nh???t th??ng tin c?? nh??n m???i nh???t c???a b???n...</p>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright ?? 2020. </p>Designed by H??ng and T??n <span>NTTU</span>
                    <p class="pull-right">?????a ch??? c???a h??ng: <span><a target="_blank" href="#">TH??NH PH??? H??? CH?? MINH</a></span></p>
                </div>
            </div>
        </div>
        
    </footer><!--/Footer-->
    

  
    <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
    <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('public/frontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('public/frontend/js/main.js')}}"></script>
</body>
</html>