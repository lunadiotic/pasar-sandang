<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta http-equiv="x-ua-compatible" content="ie=edge">
<!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="Toko Kain, Toko Bahan, Pasar Tegal Gubuk, Pasar Tegal Gubug, Pasar Baju Asia, Toko Kain Murah Cirebon, Cirebon Pasar Kain, Batik, Kerudung">
<meta name="description" content="Pasar Sandang Murah Se-Asia, Belanja Online Kain Super Murah, Kualitas Terbaik Harga Bersaing">

<!-- Favicons Icon -->
<link rel="icon" href="#" type="image/x-icon" />
<link rel="shortcut icon" href="#" type="image/x-icon" />
<title>{{ config('app.name', 'Laravel') }}</title>
<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/font-awesome.min.css') }}" media="all">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/simple-line-icons.css') }}" media="all">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/owl.theme.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/jquery.bxslider.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/jquery.mobile-menu.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/style.css') }}" media="all">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/revslider.css') }}">
<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600,800,400' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface&amp;subset=latin-ext" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script&amp;subset=latin-ext" rel="stylesheet">
</head>
<body class="cms-index-index cms-home-page">
<div id="page">
  <div class="top-banners">
    <div class="banner"> Populate this marketing banner to advertise a special promotion such as: <span>Save 20%</span> this weekend! </div>
  </div>  
  <!-- Header -->
  <header>
    <div class="header-container">
      <div class="container">
        <div class="row"> 
          <!-- Header Language -->
          <div class="col-xs-12 col-sm-4 col-md-6 col-lg-6 pull-left">
            <div class="dropdown block-language-wrapper"> <a role="button" data-toggle="dropdown" data-target="#" class="block-language dropdown-toggle" href="#"> <img src="{{ asset('assets/front/images/english.png') }}" alt="language"> English <span class="caret"></span> </a>
              <ul class="dropdown-menu" role="menu">
                <li role="presentation"> <a href="#"><img src="{{ asset('assets/front/images/english.png') }}" alt="language"> English </a> </li>
                <li role="presentation"> <a href="#"><img src="{{ asset('assets/front/images/francais.png') }}" alt="language"> French </a> </li>
                <li role="presentation"> <a href="#"><img src="{{ asset('assets/front/images/german.png') }}" alt="language"> German </a> </li>
              </ul>
            </div>
            <!-- End Header Language --> 
            <!-- Header Currency -->
            <div class="dropdown block-currency-wrapper"> <a role="button" data-toggle="dropdown" data-target="#" class="block-currency dropdown-toggle" href="#"> USD <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li role="presentation"><a href="#"> $ - Dollar </a> </li>
                <li role="presentation"><a href="#"> £ - Pound </a> </li>
                <li role="presentation"><a href="#"> € - Euro </a> </li>
              </ul>
            </div>
            <!-- End Header Currency -->
            <div class="welcome-msg"> Default welcome msg! </div>
          </div>
          <!-- Header Top Links -->
          <div class="col-xs-12 col-sm-8 col-md-6 col-lg-6 pull-right hidden-xs">
            <div class="toplinks">
              <div class="links">
                <div class="myaccount"><a title="My Account" href="login.html"><span class="hidden-xs">My Account</span></a> </div>
                <div class="check"><a title="Checkout" href="checkout.html"><span class="hidden-xs">Checkout</span></a> </div>
                <div class="check"><a title="Checkout" href="wishlist.html"><span class="hidden-xs">Wishlist</span></a> </div>
                <div class="demo"><a title="Blog" href="blog.html"><span class="hidden-xs">Blog</span></a> </div>
                <!-- Header Company -->
                <div class="dropdown block-company-wrapper hidden-xs"> <a role="button" data-toggle="dropdown" data-target="#" class="block-company dropdown-toggle" href="#"> Company <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li role="presentation"><a href="about_us.html"> About Us </a> </li>
                    <li role="presentation"><a href="#"> Customer Service </a> </li>
                    <li role="presentation"><a href="#"> Privacy Policy </a> </li>
                    <li role="presentation"><a href="sitemap.html">Site Map </a> </li>
                    <li role="presentation"><a href="#">Search Terms </a> </li>
                    <li role="presentation"><a href="#">Advanced Search </a> </li>
                  </ul>
                </div>
                <!-- End Header Company -->
                <div class="login"><a href="login.html"><span class="hidden-xs">Login</span></a> </div>
              </div>
            </div>
            <!-- End Header Top Links --> 
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 logo-block"> 
          <!-- Header Logo -->
          <div class="logo"> <a title="Magento Commerce" href="index.html"><img alt="Magento Commerce" src="{{ asset('assets/front/images/logo.png') }}"> </a> </div>
          <!-- End Header Logo --> 
        </div>
        <div class="col-lg-7 col-md-6 col-sm-6 col-xs-3 hidden-xs category-search-form">
          <div class="search-box">
            <form id="search_mini_form" action="http://demo.thmthemes.com/index.php/eclipseblue/catalogsearch/result/" method="get">
              <!-- Autocomplete End code -->
              <input id="search" type="text" name="q" value="Search entire store here..." class="searchbox" maxlength="128">
              <button type="submit" title="Search" class="search-btn-bg" id="submit-button"></button>
            </form>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 card_wishlist_area">
          <div class="mm-toggle-wrap">
            <div class="mm-toggle"><i class="fa fa-align-justify"></i><span class="mm-label">Menu</span> </div>
          </div>
          <div class="top-cart-contain"> 
            <!-- Top Cart -->
            <div class="mini-cart">
              <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"> <a href="shopping_cart.html"><span class="price hidden-xs">Shopping Cart</span> <span class="cart_count hidden-xs">2 Items/ $4580</span> </a> </div>
              <div>
                <div class="top-cart-content"> 
                  <!--block-subtitle-->
                  <ul class="mini-products-list" id="cart-sidebar">
                    <li class="item first">
                      <div class="item-inner"> <a class="product-image" title="Retis lapen casen" href="#l"><img alt="Retis lapen casen" src="{{ asset('assets/front/products-images/product1.jpg') }}"> </a>
                        <div class="product-details">
                          <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                          <!--access--><strong>1</strong> x <span class="price">$179.99</span>
                          <p class="product-name"><a href="#">Retis lapen casen...</a> </p>
                        </div>
                      </div>
                    </li>
                    <li class="item last">
                      <div class="item-inner"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"><img alt="Retis lapen casen" src="{{ asset('assets/front/products-images/product1.jpg') }}"> </a>
                        <div class="product-details">
                          <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                          <!--access--><strong>1</strong> x <span class="price">$80.00</span>
                          <p class="product-name"><a href="#">Retis lapen casen...</a> </p>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <!--actions-->
                  <div class="actions">
                    <button class="btn-checkout" title="Checkout" type="button"><span>Checkout</span> </button>
                    <a href="shopping_cart.html" class="view-cart"><span>View Cart</span></a> </div>
                </div>
              </div>
            </div>
            <!-- Top Cart -->
            <div id="ajaxconfig_info" style="display:none"> <a href="#/"></a>
              <input value="" type="hidden">
              <input id="enable_module" value="1" type="hidden">
              <input class="effect_to_cart" value="1" type="hidden">
              <input class="title_shopping_cart" value="Go to shopping cart" type="hidden">
            </div>
          </div>
          <!-- mgk wishlist --> 
        </div>
      </div>
    </div>
    <nav class="hidden-xs">
      <div class="nav-container">
        <div class="col-md-3 col-xs-12 col-sm-3">
          <div class="mega-container visible-lg visible-md visible-sm">
            <div class="navleft-container">
              <div class="mega-menu-title">
                <h3><i class="fa fa-navicon"></i> All Categories</h3>
              </div>
              <div class="mega-menu-category">
                <ul class="nav">
                  <li> <a href="index.html"><i class="fa fa-home"></i> Layout</a>
                    <div class="wrap-popup column1">
                      <div class="popup">
                        <ul class="nav">
                          <li><a href="index.html">Home Version 1</a></li>
                          <li><a href="../home2/index.html">Home Version 2</a></li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li> <a href="#"><i class="fa fa-file-text"></i> Pages</a>
                    <div class="wrap-popup">
                      <div class="popup">
                        <div class="row">
                          <div class="col-sm-6">
                            <ul class="nav">
                              <li><a href="grid.html"><span>Grid</span></a> </li>
                              <li> <a href="list.html"> <span>List</span> </a> </li>
                              <li> <a href="product_detail.html"> <span>Product Detail</span> </a> </li>
                              <li> <a href="shopping_cart.html"> <span>Shopping Cart</span> </a> </li>
                              <li><a href="checkout.html"><span>Checkout</span></a> </li>
                              <li> <a href="wishlist.html"> <span>Wishlist</span> </a> </li>
                            </ul>
                          </div>
                          <div class="col-sm-6 has-sep">
                            <ul class="nav">
                              <li> <a href="dashboard.html"> <span>Dashboard</span> </a> </li>
                              <li> <a href="multiple_addresses.html"> <span>Multiple Addresses</span> </a> </li>
                              <li><a href="compare.html"><span>Compare</span></a> </li>
                              <li><a href="quick_view.html"><span>Quick View</span></a> </li>
                              <li><a href="newsletter.html"><span>Newsletter</span></a> </li>
                              <li><a href="404error.html"><span>404 Error Page</span></a> </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="has-sub wide"> <a href="#"><i class="fa fa-gift"></i> Women</a> 
                    <div class="wrap-popup">
                      <div class="popup">
                        <div class="row">
                          <div class="col-md-4 col-sm-6">
                            <h3>Clothing</h3>
                            <ul class="nav">
                              <li> <a href="grid.html"><span>Western Wear</span></a> </li>
                              <!--level2 nav-6-1-1-->
                              <li> <a href="grid.html"><span>Night Wear</span></a> </li>
                              <!--level2 nav-6-1-1-->
                              <li> <a href="grid.html"><span>Ethnic Wear</span></a> </li>
                              <!--level2 nav-6-1-1-->
                              <li> <a href="grid.html"><span>Designer Wear</span></a> </li>
                              <!--level2 nav-6-1-1-->
                            </ul>
                            <br>
                            <h3>Shoes</h3>
                            <ul class="nav">
                              <li> <a href="grid.html">Flat Shoes</a> </li>
                              <li> <a href="grid.html">Flat Sandals</a> </li>
                              <li> <a href="grid.html">Boots</a> </li>
                              <li> <a href="grid.html">Heels</a> </li>
                            </ul>
                          </div>
                          <div class="col-md-4 col-sm-6 has-sep">
                            <h3>Jwellery</h3>
                            <ul class="nav">
                              <li> <a href="grid.html">Bracelets</a> </li>
                              <li> <a href="grid.html">Necklaces &amp; Pendent</a> </li>
                              <li> <a href="grid.html">Pendants</a> </li>
                              <li> <a href="grid.html">Pins &amp; Brooches</a> </li>
                            </ul>
                            <br>
                            <h3>Swimwear</h3>
                            <ul class="nav">
                              <li> <a href="grid.html">Swimsuits</a> </li>
                              <li> <a href="grid.html">Beach Clothing</a> </li>
                              <li> <a href="grid.html">Clothing</a> </li>
                              <li> <a href="grid.html">Bikinis</a> </li>
                            </ul>
                          </div>
                          <div class="col-md-4 has-sep hidden-sm">
                            <div class="custom-menu-right">
                              <div class="box-banner media">
                                <div class="add-right"><img src="{{ asset('assets/front/images/menu-img1.jpg') }}"  alt=""></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li> <a href="#"><i class="fa fa-suitcase"></i> Men</a>
                    <div class="wrap-popup">
                      <div class="popup">
                        <div class="row">
                          <div class="col-md-4 col-sm-6">
                            <h3>Clothing</h3>
                            <ul class="nav">
                              <li> <a href="grid.html">Casual Dresses</a> </li>
                              <li> <a href="grid.html">Evening</a> </li>
                              <li> <a href="grid.html">Designer</a> </li>
                              <li> <a href="grid.html">Party</a> </li>
                            </ul>
                            <br>
                            <h3>Sunglasses</h3>
                            <ul class="nav">
                              <li> <a href="grid.html"><span>Ray Ban</span></a> </li>
                              <li> <a href="grid.html"><span>Fasttrack</span></a> </li>
                              <li> <a href="grid.html"><span>Police</span></a> </li>
                              <li> <a href="grid.html"><span>Oakley</span></a> </li>
                            </ul>
                          </div>
                          <div class="col-md-4 col-sm-6 has-sep">
                            <h3>Watches</h3>
                            <ul class="nav">
                              <li> <a href="grid.html"><span>Fasttrack</span></a> </li>
                              <li> <a href="grid.html"><span>Casio</span></a> </li>
                              <li> <a href="grid.html"><span>Titan</span></a> </li>
                              <li> <a href="grid.html"><span>Tommy-Hilfiger</span></a> </li>
                            </ul>
                            <br>
                            <h3>Shoes</h3>
                            <ul class="nav">
                              <li> <a href="grid.html"><span>Sport Shoes</span></a> </li>
                              <li> <a href="grid.html"><span>Casual Shoes</span></a> </li>
                              <li> <a href="grid.html"><span>Leather Shoes</span></a> </li>
                              <li> <a href="grid.html"><span>Canvas shoes</span></a> </li>
                            </ul>
                          </div>
                          <div class="col-md-4 has-sep hidden-sm">
                            <div class="custom-menu-right">
                              <div class="box-banner media">
                                <div class="add-right"><img src="{{ asset('assets/front/images/menu-img2.jpg') }}" alt=""></div>
                              </div>
                              <div class="box-banner media">
                                <div class="add-right"><img src="{{ asset('assets/front/images/menu-img3.jpg') }}" alt=""></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="nosub"><a href="#"><i class="fa fa-camera"></i> Electronics</a></li>
                  <li class="nosub"><a href="#"><i class="fa fa-bed"></i> Furniture</a></li>
                  <li class="nosub"><a href="#"><i class="fa fa-child"></i> Baby & Kids</a></li>
                  <li class="more-menu"> <a href="#"><i class="fa fa-soccer-ball-o"></i> Game &amp; Sport</a>
                    <div class="wrap-popup column1">
                      <div class="popup">
                        <ul class="nav">
                          <li><a href="grid.html">Accessories</a></li>
                          <li><a href="grid.html">Hats and Gloves</a></li>
                          <li><a href="grid.html">Lifestyle</a></li>
                          <li><a href="grid.html">Bras</a></li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="more-menu"> <a href="#"><i class="fa fa-archive"></i> Accessories</a>
                    <div class="wrap-popup column1">
                      <div class="popup">
                        <ul class="nav">
                          <li> <a href="grid.html"> Wallets </a> </li>
                          <li> <a href="grid.html"> Laptop Bags</a> </li>
                          <li> <a href="grid.html"> Belts </a> </li>
                          <li> <a href="grid.html"> Bakpacks </a> </li>
                        </ul>
                      </div>
                    </div>
                  </li>
                  <li class="nosub"><a href="#"><i class="fa fa-shopping-basket"></i> Other</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- features box -->
        <div class="our-features-box hidden-xs">
          <div class="features-block">
            <div class="col-lg-9 col-md-9 col-xs-12 col-sm-9 offer-block"> <a href="#">Home</a> <a href="#">Shop</a> <a href="#">Blog</a> <a href="#">Pages</a> <a href="#">Todays Deals</a> <span>Order online or call us (+1800) 000 8808</span> </div>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <!-- end header -->
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-md-4 col-sm-3 hidden-xs">
        <div class="side-banner"><img src="{{ asset('assets/front/images/side-banner.jpg') }}" alt="banner"></div>
      </div>
      <div class="col-md-9 col-sm-9 col-xs-12 home-slider">
        <div id="thm-slideshow" class="thm-slideshow slider-block">
          <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container'>
            <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
              <ul>
                <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb="{{ asset('assets/front/images/slide-img1.jpg') }}"> <img src="{{ asset('assets/front/images/slide-img1.jpg') }}" alt="slide-img" data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' />
                  <div class="info">
                    <div class='tp-caption ExtraLargeTitle sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;'><span>Todays Deals</span> </div>
                    <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'><span>Fairy Style</span> </div>
                    <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1450' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>In augue urna, nunc, tincidunt, augue, augue facilisis facilisis.</div>
                    <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'><a href='#' class="buy-btn">Shop Now</a> </div>
                  </div>
                </li>
                <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb="{{ asset('assets/front/images/slide-img2.jpg') }}"> <img src="{{ asset('assets/front/images/slide-img2.jpg') }}" alt="slide-img" data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' />
                  <div class="info">
                    <div class='tp-caption ExtraLargeTitle sft slide2  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;padding-right:0px'><span>Womens Day</span> </div>
                    <div class='tp-caption LargeTitle sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'>Hottest Deal</div>
                    <div class='tp-caption Title sft  tp-resizeme small_text' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                    <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'><a href='#' class="buy-btn">Buy Now</a> </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="main-container col2-left-layout">
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-sm-push-3">
          <div style="overflow:hidden">
            <div class="figure banner-with-effects effect-sadie1 banner-width  with-button" style="background-color:#ffffff"><img src="{{ asset('assets/front/images/watch.jpg') }}" alt="">
              <div class="figcaption">
                <div class="banner-content left top"><span style="color: #cccccc; font-size: 12px; letter-spacing:1px; font-weight:600">DIGITAL LIFE</span><br>
                  <span style="font-size: 24px; color: #ffffff;">Slim, smart and <br style="color: #ffffff; font-size: 24px;">
                  beautiful</span></div>
              </div>
              <a href="" style="color:#00aeef" class="left bottom btn_type_1" rel="nofollow">Read more</a></div>
            <div class="figure banner-with-effects effect-sadie1 banner-width  with-button" style="background-color:#ffffff"><img src="{{ asset('assets/front/images/shoes-banner.jpg') }}" alt="">
              <div class="figcaption">
                <div class="banner-content left top"><b><span style="color: #444444; font-size: 12px; letter-spacing:1px">TODAYS OFFER</span></b><br>
                  <span style="color: #000000; font-size: 24px; padding-top:5px">Men's shoes <br style="color: #000000; font-size: 24px;">
                  collection</span></div>
              </div>
              <a href="#" style="color:#00aeef" class="left bottom btn_type_1" rel="nofollow">Read more</a></div>
          </div>
          <div class="content-page"> 
            
            <!-- featured category -->
            <div class="category-product">
              <div class="navbar nav-menu">
                <div class="navbar-collapse">
                  <div class="new_title">
                    <h2>New Products</h2>
                  </div>
                  <ul class="nav navbar-nav">
                    <li class="active"><a data-toggle="tab" href="#tab-1">Women</a></li>
                    <li class=" "><a data-toggle="tab" href="#tab-2">Swimwear</a></li>
                    <li class=""><a data-toggle="tab" href="#tab-3" class="active">Clothing</a></li>
                  </ul>
                </div>
                <!-- /.navbar-collapse --> 
                
              </div>
              <div class="product-bestseller">
                <div class="product-bestseller-content">
                  <div class="product-bestseller-list">
                    <div class="tab-container"> 
                      <!-- tab product -->
                      <div class="tab-panel active" id="tab-1">
                        <div class="category-products">
                          <ul class="products-grid">
                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                              <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{ asset('assets/front/products-images/product1.jpg') }}"> </a>
                              <div class="new-label new-top-left">new</div>
                              <div class="box-hover">
                                <ul class="add-to-links">
                                  <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                  <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                  <li><a class="link-compare" href="compare.html"></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a> </div>
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div style="width:80%" class="rating"></div>
                                  </div>
                                  <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                              <!-- End  Item inner--> 
                            </li>
                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                              <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{ asset('assets/front/products-images/product1.jpg') }}"> </a>
                              <div class="new-label new-top-left">new</div>
                              <div class="box-hover">
                                <ul class="add-to-links">
                                  <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                  <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                  <li><a class="link-compare" href="compare.html"></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a> </div>
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div style="width:80%" class="rating"></div>
                                  </div>
                                  <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                              <!-- End  Item inner--> 
                            </li>
                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                              <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{ asset('assets/front/products-images/product1.jpg') }}"> </a>
                              <div class="new-label new-top-left">new</div>
                              <div class="box-hover">
                                <ul class="add-to-links">
                                  <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                  <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                  <li><a class="link-compare" href="compare.html"></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a> </div>
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div style="width:80%" class="rating"></div>
                                  </div>
                                  <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                              <!-- End  Item inner--> 
                            </li>
                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                              <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{ asset('assets/front/products-images/product1.jpg') }}"> </a>
                              <div class="new-label new-top-left">new</div>
                              <div class="box-hover">
                                <ul class="add-to-links">
                                  <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                  <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                  <li><a class="link-compare" href="compare.html"></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a> </div>
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div style="width:80%" class="rating"></div>
                                  </div>
                                  <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                              <!-- End  Item inner--> 
                            </li>
                          </ul>
                        </div>
                      </div>
                      
                      <!-- tab product -->
                      <div class="tab-panel " id="tab-2">
                        <div class="category-products">
                          <ul class="products-grid">
                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                              <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{ asset('assets/front/products-images/product1.jpg') }}"> </a>
                              <div class="new-label new-top-left">new</div>
                              <div class="box-hover">
                                <ul class="add-to-links">
                                  <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                  <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                  <li><a class="link-compare" href="compare.html"></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a> </div>
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div style="width:80%" class="rating"></div>
                                  </div>
                                  <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                              <!-- End  Item inner--> 
                            </li>
                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                              <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{ asset('assets/front/products-images/product1.jpg') }}"> </a>
                              <div class="new-label new-top-left">new</div>
                              <div class="box-hover">
                                <ul class="add-to-links">
                                  <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                  <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                  <li><a class="link-compare" href="compare.html"></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a> </div>
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div style="width:80%" class="rating"></div>
                                  </div>
                                  <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                              <!-- End  Item inner--> 
                            </li>
                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                              <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{ asset('assets/front/products-images/product1.jpg') }}"> </a>
                              <div class="new-label new-top-left">new</div>
                              <div class="box-hover">
                                <ul class="add-to-links">
                                  <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                  <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                  <li><a class="link-compare" href="compare.html"></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a> </div>
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div style="width:80%" class="rating"></div>
                                  </div>
                                  <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                              <!-- End  Item inner--> 
                            </li>
                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                              <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{ asset('assets/front/products-images/product1.jpg') }}"> </a>
                              <div class="new-label new-top-left">new</div>
                              <div class="box-hover">
                                <ul class="add-to-links">
                                  <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                  <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                  <li><a class="link-compare" href="compare.html"></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a> </div>
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div style="width:80%" class="rating"></div>
                                  </div>
                                  <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                              <!-- End  Item inner--> 
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="tab-panel " id="tab-3">
                        <div class="category-products">
                          <ul class="products-grid">
                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                              <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{ asset('assets/front/products-images/product1.jpg') }}"> </a>
                              <div class="new-label new-top-left">new</div>
                              <div class="box-hover">
                                <ul class="add-to-links">
                                  <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                  <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                  <li><a class="link-compare" href="compare.html"></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a> </div>
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div style="width:80%" class="rating"></div>
                                  </div>
                                  <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                              <!-- End  Item inner--> 
                            </li>
                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                              <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{ asset('assets/front/products-images/product1.jpg') }}"> </a>
                              <div class="new-label new-top-left">new</div>
                              <div class="box-hover">
                                <ul class="add-to-links">
                                  <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                  <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                  <li><a class="link-compare" href="compare.html"></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a> </div>
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div style="width:80%" class="rating"></div>
                                  </div>
                                  <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                              <!-- End  Item inner--> 
                            </li>
                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                              <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{ asset('assets/front/products-images/product1.jpg') }}"> </a>
                              <div class="new-label new-top-left">new</div>
                              <div class="box-hover">
                                <ul class="add-to-links">
                                  <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                  <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                  <li><a class="link-compare" href="compare.html"></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a> </div>
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div style="width:80%" class="rating"></div>
                                  </div>
                                  <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                              <!-- End  Item inner--> 
                            </li>
                            <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                              <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{ asset('assets/front/products-images/product1.jpg') }}"> </a>
                              <div class="new-label new-top-left">new</div>
                              <div class="box-hover">
                                <ul class="add-to-links">
                                  <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                  <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                  <li><a class="link-compare" href="compare.html"></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a> </div>
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div style="width:80%" class="rating"></div>
                                  </div>
                                  <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                              <!-- End  Item inner--> 
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="tab-panel " id="tab-4"> No Products Found !! </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          
          <div class="offer-banner"> <a href="#"><img alt="Banner" src="{{ asset('assets/front/images/banner-img.png') }}"></a> </div>
          <!-- bestsell slider -->
          <div class="bestsell-pro">
            <div>
              <div class="slider-items-products">
                <div class="bestsell-block">
                  <div class="block-title">
                    <h2>Best Sellers</h2>
                  </div>
                  <div id="bestsell-slider" class="product-flexslider hidden-buttons">
                    <div class="slider-items slider-width-col4 products-grid block-content">
                      <div class="item">
                        <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{ asset('assets/front/products-images/product1.jpg') }}"> </a>
                              <div class="new-label new-top-left">new</div>
                              <div class="box-hover">
                                <ul class="add-to-links">
                                  <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                  <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                  <li><a class="link-compare" href="compare.html"></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a> </div>
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div style="width:80%" class="rating"></div>
                                  </div>
                                  <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                              <div class="item-content">
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$88.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Item -->
                      <div class="item">
                        <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{ asset('assets/front/products-images/product1.jpg') }}"> </a>
                              <div class="box-hover">
                                <ul class="add-to-links">
                                  <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                  <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                  <li><a class="link-compare" href="compare.html"></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a> </div>
                              <div class="item-content">
                                <div class="rating">
                                  <div class="ratings">
                                    <div class="rating-box">
                                      <div style="width:80%" class="rating"></div>
                                    </div>
                                    <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                  </div>
                                </div>
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$325.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End Item --> 
                      <!-- Item -->
                      <div class="item">
                        <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{ asset('assets/front/products-images/product1.jpg') }}"> </a>
                              <div class="box-hover">
                                <ul class="add-to-links">
                                  <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                  <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                  <li><a class="link-compare" href="compare.html"></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a> </div>
                              <div class="item-content">
                                <div class="rating">
                                  <div class="ratings">
                                    <div class="rating-box">
                                      <div style="width:80%" class="rating"></div>
                                    </div>
                                    <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                  </div>
                                </div>
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$245.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End Item -->
                      <div class="item">
                        <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{ asset('assets/front/products-images/product1.jpg') }}"> </a>
                              <div class="new-label new-top-left">new</div>
                              <div class="box-hover">
                                <ul class="add-to-links">
                                  <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                  <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                  <li><a class="link-compare" href="compare.html"></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a> </div>
                              <div class="item-content">
                                <div class="rating">
                                  <div class="ratings">
                                    <div class="rating-box">
                                      <div style="width:80%" class="rating"></div>
                                    </div>
                                    <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                  </div>
                                </div>
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$225.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Item -->
                      <div class="item">
                        <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{ asset('assets/front/products-images/product1.jpg') }}"> </a>
                              <div class="box-hover">
                                <ul class="add-to-links">
                                  <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                  <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                  <li><a class="link-compare" href="compare.html"></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a> </div>
                              <div class="item-content">
                                <div class="rating">
                                  <div class="ratings">
                                    <div class="rating-box">
                                      <div style="width:80%" class="rating"></div>
                                    </div>
                                    <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                  </div>
                                </div>
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$115.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End Item -->
                      <div class="item">
                        <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{ asset('assets/front/products-images/product1.jpg') }}"> </a>
                              <div class="box-hover">
                                <ul class="add-to-links">
                                  <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                  <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                  <li><a class="link-compare" href="compare.html"></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a> </div>
                              <div class="item-content">
                                <div class="rating">
                                  <div class="ratings">
                                    <div class="rating-box">
                                      <div style="width:80%" class="rating"></div>
                                    </div>
                                    <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                  </div>
                                </div>
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$155.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Item -->
                      <div class="item">
                        <div class="item-inner">
                          <div class="item-img">
                            <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{ asset('assets/front/products-images/product1.jpg') }}"> </a>
                              <div class="box-hover">
                                <ul class="add-to-links">
                                  <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                  <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                  <li><a class="link-compare" href="compare.html"></a> </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="item-info">
                            <div class="info-inner">
                              <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a> </div>
                              <div class="item-content">
                                <div class="rating">
                                  <div class="ratings">
                                    <div class="rating-box">
                                      <div style="width:80%" class="rating"></div>
                                    </div>
                                    <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                  </div>
                                </div>
                                <div class="item-price">
                                  <div class="price-box"> <span class="regular-price"> <span class="price">$175.00</span> </span> </div>
                                </div>
                                <div class="action">
                                  <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End Item --> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="featured-pro-block">
            <div class="slider-items-products">
              <div class="new-arrivals-block">
                <div class="block-title">
                  <h2>Featured Product</h2>
                </div>
                <div id="new-arrivals-slider" class="product-flexslider hidden-buttons">
                  <div class="home-block-inner"> </div>
                  <div class="slider-items slider-width-col4 products-grid block-content">
                    <div class="item">
                      <div class="item-inner">
                        <div class="item-img">
                          <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{ asset('assets/front/products-images/product1.jpg') }}"> </a>
                            <div class="new-label new-top-left">new</div>
                            <div class="box-hover">
                              <ul class="add-to-links">
                                <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                <li><a class="link-compare" href="compare.html"></a> </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a> </div>
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div style="width:80%" class="rating"></div>
                                </div>
                                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                              </div>
                            </div>
                            <div class="item-content">
                              <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price">$245.00</span> </span> </div>
                              </div>
                              <div class="action">
                                <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Item -->
                    <div class="item">
                      <div class="item-inner">
                        <div class="item-img">
                          <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{ asset('assets/front/products-images/product1.jpg') }}"> </a>
                            <div class="box-hover">
                              <ul class="add-to-links">
                                <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                <li><a class="link-compare" href="compare.html"></a> </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a> </div>
                            <div class="item-content">
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div style="width:80%" class="rating"></div>
                                  </div>
                                  <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                              <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price">$155.00</span> </span> </div>
                              </div>
                              <div class="action">
                                <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Item --> 
                    <!-- Item -->
                    <div class="item">
                      <div class="item-inner">
                        <div class="item-img">
                          <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{ asset('assets/front/products-images/product1.jpg') }}"> </a>
                            <div class="box-hover">
                              <ul class="add-to-links">
                                <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                <li><a class="link-compare" href="compare.html"></a> </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a> </div>
                            <div class="item-content">
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div style="width:80%" class="rating"></div>
                                  </div>
                                  <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                              <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price">$185.00</span> </span> </div>
                              </div>
                              <div class="action">
                                <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Item -->
                    <div class="item">
                      <div class="item-inner">
                        <div class="item-img">
                          <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{ asset('assets/front/products-images/product1.jpg') }}"> </a>
                            <div class="new-label new-top-left">new</div>
                            <div class="box-hover">
                              <ul class="add-to-links">
                                <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                <li><a class="link-compare" href="compare.html"></a> </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a> </div>
                            <div class="item-content">
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div style="width:80%" class="rating"></div>
                                  </div>
                                  <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                              <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price">$235.00</span> </span> </div>
                              </div>
                              <div class="action">
                                <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Item -->
                    <div class="item">
                      <div class="item-inner">
                        <div class="item-img">
                          <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{ asset('assets/front/products-images/product1.jpg') }}"> </a>
                            <div class="box-hover">
                              <ul class="add-to-links">
                                <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                <li><a class="link-compare" href="compare.html"></a> </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a> </div>
                            <div class="item-content">
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div style="width:80%" class="rating"></div>
                                  </div>
                                  <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                              <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price">$225.00</span> </span> </div>
                              </div>
                              <div class="action">
                                <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Item -->
                    <div class="item">
                      <div class="item-inner">
                        <div class="item-img">
                          <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{ asset('assets/front/products-images/product1.jpg') }}"> </a>
                            <div class="box-hover">
                              <ul class="add-to-links">
                                <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                <li><a class="link-compare" href="compare.html"></a> </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a> </div>
                            <div class="item-content">
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div style="width:80%" class="rating"></div>
                                  </div>
                                  <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                              <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price">$335.00</span> </span> </div>
                              </div>
                              <div class="action">
                                <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Item -->
                    <div class="item">
                      <div class="item-inner">
                        <div class="item-img">
                          <div class="item-img-info"> <a class="product-image" title="Retis lapen casen" href="product_detail.html"> <img alt="Retis lapen casen" src="{{ asset('assets/front/products-images/product1.jpg') }}"> </a>
                            <div class="box-hover">
                              <ul class="add-to-links">
                                <li><a class="link-quickview" href="quick_view.html"></a> </li>
                                <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                                <li><a class="link-compare" href="compare.html"></a> </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a title="Retis lapen casen" href="product_detail.html"> Retis lapen casen </a> </div>
                            <div class="item-content">
                              <div class="rating">
                                <div class="ratings">
                                  <div class="rating-box">
                                    <div style="width:80%" class="rating"></div>
                                  </div>
                                  <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                </div>
                              </div>
                              <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                              </div>
                              <div class="action">
                                <button class="button btn-cart" type="button" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Item --> 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9">
          <div>
    <div class="sideoffer-banner">
          
          <a href="#" title="Side Offer Banner">
             
            <img class="hidden-xs" src="{{ asset('assets/front/images/custom-slide1.jpg') }}" alt="Side Offer Banner"></a>

        
    </div></div>
          <div class="hot-deal">
            <ul class="products-grid">
              <li class="right-space two-height item">
                <div class="item-inner">
                  <div class="item-img">
                    <div class="item-img-info"> <a href="#" title="Retis lapen casen" class="product-image"> <img src="{{ asset('assets/front/products-images/product1.jpg') }}" alt="Retis lapen casen"> </a>
                      <div class="hot-label hot-top-left">Hot Deal</div>
                      <div class="box-hover">
                        <ul class="add-to-links">
                          <li><a class="link-quickview" href="quick_view.html"></a> </li>
                          <li><a class="link-wishlist" href="wishlist.html"></a> </li>
                          <li><a class="link-compare" href="compare.html"></a> </li>
                        </ul>
                      </div>
                      <div class="box-timer">
                        <div class="countbox_1 timer-grid"></div>
                      </div>
                    </div>
                  </div>
                  <div class="item-info">
                    <div class="info-inner">
                      <div class="item-title"> <a href="product_detail.html" title="Retis lapen casen"> Retis lapen casen </a> </div>
                      <div class="item-content">
                        <div class="rating">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating" style="width:80%"></div>
                            </div>
                            <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                          </div>
                        </div>
                        <div class="item-price">
                          <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                        </div>
                        <div class="action">
                          <button data-original-title="Add to Cart" title="" type="button" class="button btn-cart"><span>Add to Cart</span> </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="testimonials">
            <div class="ts-testimonial-widget">
              <div class="slider-items-products">
                <div id="testimonials-slider" class="product-flexslider hidden-buttons home-testimonials">
                  <div class="slider-items slider-width-col4 fadeInUp owl-carousel owl-theme" style="opacity: 1; display: block;">
                   
                          <div class="holder">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Lid est laborum dolo rumes fugats untras. dolore magna aliquam erat volutpat. Aenean est auctorwisiet urna. Aliquam erat volutpat...</p>
                            <div class="testimonial-arrow-down"></div>
                            <div class="thumb">
                              <div class="customer-img"> <img src="{{ asset('assets/front/images/photo1.jpg') }}" alt="Saraha Smith"> </div>
                              <div class="customer-bio"> <strong class="name"><a href="#" target="_blank">Saraha Smith</a></strong> <span>Happy Customer</span> </div>
                            </div>
                          </div>
                        
                          <div class="holder">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Lid est laborum dolo rumes fugats untras. dolore magna aliquam erat volutpat. Aenean est auctorwisiet urna. Aliquam erat volutpat...</p>
                            <div class="testimonial-arrow-down"></div>
                            <div class="thumb">
                              <div class="customer-img"> <img src="{{ asset('assets/front/images/photo.jpg') }}" alt="Stephen Doe"> </div>
                              <div class="customer-bio"> <strong class="name"><a href="#" target="_blank">Stephen Doe</a></strong> <span>Happy Customer</span> </div>
                            </div>
                          </div>
                        
                          <div class="holder">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Lid est laborum dolo rumes fugats untras. dolore magna aliquam erat volutpat. Aenean est auctorwisiet urna. Aliquam erat volutpat...</p>
                            <div class="testimonial-arrow-down"></div>
                            <div class="thumb">
                              <div class="customer-img"> <img src="{{ asset('assets/front/images/photo1.jpg') }}" alt="Mark doe"> </div>
                              <div class="customer-bio"> <strong class="name"><a href="#" target="_blank">Mark doe</a></strong> <span>Happy Customer</span> </div>
                            </div>
                          </div>
                       
                          <div class="holder">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Lid est laborum dolo rumes fugats untras. dolore magna aliquam erat volutpat. Aenean est auctorwisiet urna. Aliquam erat volutpat...</p>
                            <div class="testimonial-arrow-down"></div>
                            <div class="thumb">
                              <div class="customer-img"> <img src="{{ asset('assets/front/images/photo.jpg') }}" alt="John Doe"> </div>
                              <div class="customer-bio"> <strong class="name"><a href="#" target="_blank">John Doe</a></strong> <span>Happy Customer</span> </div>
                            </div>
                          </div>
                        
                      
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="featured-add-box">
            <div class="featured-add-inner"> <a href="#"> <img src="{{ asset('assets/front/images/bottom_banner.jpg') }}" alt="f-img"></a>
              <div class="banner-content">
                <div class="banner-text">Electronic's</div>
                <div class="banner-text1">20% off</div>
                <p>limited time offer</p>
                <a href="#" class="view-bnt">Shop now</a> </div>
            </div>
          </div>
          
         <div>
    <div class="our-features-box">
      <div class="row">
        <div class="col-lg-12 space">
          <div class="feature-box first"> <span class="fa fa-truck"></span>
            <div class="content">
              <h3>Worldwide Delivery</h3>
              <p>Lorem ipsum dolor sit amet</p>
            </div>
          </div>
        </div>
        <div class="col-lg-12 space">
          <div class="feature-box"> <span class="fa fa-headphones"></span>
            <div class="content">
              <h3>Help Center</h3>
              <p>Lorem ipsum dolor sit amet</p>
            </div>
          </div>
        </div>
        <div class="col-lg-12 space">
          <div class="feature-box"> <span class="fa fa-share"></span>
            <div class="content">
              <h3>Easy RETURNS</h3>
              <p>Lorem ipsum dolor sit amet</p>
            </div>
          </div>
        </div>
        <div class="col-lg-12 space">
          <div class="feature-box last"> <span class="fa fa-phone"></span>
            <div class="content">
              <h3>Helpline  +0800 567 345</h3>
              <p>Lorem ipsum dolor sit amet</p>
            </div>
          </div>
        </div>
      </div>

  </div></div> 
          
        </aside>
      </div>
    </div>
  </section>
  
  <!-- Latest Blog -->
  <div class="container">
    <div class="row">
      <div class="blog-outer-container">
        <div class="block-title">
          <h2>Latest Blog</h2>
        </div>
        <div class="blog-inner">
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="entry-thumb image-hover2"> <a href="blog_single_post.html"> <img alt="Blog" src="{{ asset('assets/front/images/blog-img1.jpg') }}"> </a> </div>
            <div class="blog-preview_info">
              <h4 class="blog-preview_title"><a href="blog_single_post.html">Standard blog post with photo</a></h4>
              <ul class="post-meta">
                <li><i class="fa fa-user"></i>posted by <a href="#">admin</a> </li>
                <li><i class="fa fa-comments"></i><a href="#">8 comments</a> </li>
                <li><i class="fa fa-clock-o"></i><span class="day">12</span> <span class="month">Feb</span></li>
              </ul>
              <div class="blog-preview_desc">Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips.</div>
              <a class="blog-preview_btn" href="blog_single_post.html">READ MORE</a> </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="entry-thumb image-hover2"> <a href="blog_single_post.html"> <img alt="Blog" src="{{ asset('assets/front/images/blog-img3.jpg') }}"> </a> </div>
            <div class="blog-preview_info">
              <h4 class="blog-preview_title"><a href="blog_single_post.html">Standard blog post with photo</a></h4>
              <ul class="post-meta">
                <li><i class="fa fa-user"></i>posted by <a href="#">admin</a> </li>
                <li><i class="fa fa-comments"></i><a href="#">8 comments</a> </li>
                <li><i class="fa fa-clock-o"></i><span class="day">12</span> <span class="month">Feb</span></li>
              </ul>
              <div class="blog-preview_desc">Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips.</div>
              <a class="blog-preview_btn" href="blog_single_post.html">READ MORE</a> </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="entry-thumb image-hover2"> <a href="blog_single_post.html"> <img alt="Blog" src="{{ asset('assets/front/images/blog-img2.jpg') }}"> </a> </div>
            <div class="blog-preview_info">
              <h4 class="blog-preview_title"><a href="blog_single_post.html">Standard blog post with photo</a></h4>
              <ul class="post-meta">
                <li><i class="fa fa-user"></i>posted by <a href="#">admin</a> </li>
                <li><i class="fa fa-comments"></i><a href="#">4 comments</a> </li>
                <li><i class="fa fa-clock-o"></i><span class="day">25</span> <span class="month">Jan</span></li>
              </ul>
              <div class="blog-preview_desc">Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros.</div>
              <a class="blog-preview_btn" href="blog_single_post.html">READ MORE</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Latest Blog --> 
  <!-- Footer -->
  <footer class="footer">
    <div class="newsletter-wrap">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="newsletter">
              <form>
                <div>
                  <h4><span>newsletter</span></h4>
                  <input type="text" placeholder="Enter your email address" class="input-text" title="Sign up for our newsletter" id="newsletter1" name="email">
                  <button class="subscribe" title="Subscribe" type="submit"><span>Subscribe</span></button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--newsletter-->
    <div class="footer-middle">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <div class="footer-column pull-left">
              <h4>Shopping Guide</h4>
              <ul class="links">
                <li><a href="blog.html" title="How to buy">Blog</a></li>
                <li><a href="faq.html" title="FAQs">FAQs</a></li>
                <li><a href="#" title="Payment">Payment</a></li>
                <li><a href="#" title="Shipment">Shipment</a></li>
                <li><a href="#" title="Where is my order?">Where is my order?</a></li>
                <li><a href="#" title="Return policy">Return policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="footer-column pull-left">
              <h4>Style Advisor</h4>
              <ul class="links">
                <li><a href="login.html" title="Your Account">Your Account</a></li>
                <li><a href="#" title="Information">Information</a></li>
                <li><a href="#" title="Addresses">Addresses</a></li>
                <li><a href="#" title="Addresses">Discount</a></li>
                <li><a href="#" title="Orders History">Orders History</a></li>
                <li><a href="#" title="Order Tracking">Order Tracking</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="footer-column pull-left">
              <h4>Information</h4>
              <ul class="links">
                <li><a href="sitemap.html" title="Site Map">Site Map</a></li>
                <li><a href="#" title="Search Terms">Search Terms</a></li>
                <li><a href="#" title="Advanced Search">Advanced Search</a></li>
                <li><a href="about_us.html" title="About Us">About Us</a></li>
                <li><a href="contact_us.html" title="Contact Us">Contact Us</a></li>
                <li><a href="#" title="Suppliers">Suppliers</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <h4>Contact Us</h4>
            <div class="contacts-info">
<address><i class="add-icon"></i>ABC Town Luton Street,<br>
New York 226688</address>
<div class="phone-footer"><i class="phone-icon"></i>+ 0800 567 345</div>
<div class="email-footer"><i class="email-icon"></i><a href="mailto:abc@example.com">abc@example.com</a></div>
</div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6">
            <div class="social">
              <ul>
                <li class="fb"><a href="#"></a></li>
                <li class="tw"><a href="#"></a></li>
                <li class="googleplus"><a href="#"></a></li>
                <li class="rss"><a href="#"></a></li>
                <li class="pintrest"><a href="#"></a></li>
                <li class="linkedin"><a href="#"></a></li>
                <li class="youtube"><a href="#"></a></li>
              </ul>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6">
            <div class="payment-accept"> <img src="{{ asset('assets/front/images/payment-1.png') }}" alt=""> <img src="{{ asset('assets/front/images/payment-2.png') }}" alt=""> <img src="{{ asset('assets/front/images/payment-3.png') }}" alt=""> <img src="{{ asset('assets/front/images/payment-4.png') }}" alt=""> </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-xs-12 coppyright"> 
      	© 2017 ThemesSoft. All Rights Reserved.
      	</div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer --> 
</div>
<!-- mobile menu -->
<div id="mobile-menu">
  <ul>
    <li>
      <div class="mm-search">
        <form id="search1" name="search">
          <div class="input-group">
            <div class="input-group-btn">
              <button class="btn btn-default" type="submit"><i class="fa fa-search"></i> </button>
            </div>
            <input type="text" class="form-control simple" placeholder="Search ..." name="srch-term" id="srch-term">
          </div>
        </form>
      </div>
    </li>
    <li> <a href="index.html">Home</a>
      <ul>
        <li><a href="index.html">Home Version 1</a></li>
        <li><a href="../home2/index.html">Home Version 2</a></li>
      </ul>
    </li>
    <li> <a href="#">Pages</a>
      <ul>
        <li><a href="grid.html">Grid</a> </li>
        <li> <a href="list.html">List</a> </li>
        <li> <a href="product_detail.html">Product Detail</a> </li>
        <li> <a href="shopping_cart.html">Shopping Cart</a> </li>
        <li><a href="checkout.html">Checkout</a> </li>
        <li> <a href="wishlist.html">Wishlist</a> </li>
        <li> <a href="dashboard.html">Dashboard</a> </li>
        <li> <a href="multiple_addresses.html">Multiple Addresses</a> </li>
        <li> <a href="about_us.html">About us</a> </li>
        <li> <a href="blog.html">Blog</a>
          <ul>
            <li><a href="blog-detail.html">Blog Detail</a> </li>
          </ul>
        </li>
        <li><a href="contact_us.html">Contact us</a> </li>
        <li><a href="404error.html">404 Error Page</a> </li>
      </ul>
    </li>
    <li> <a href="#">Women</a>
      <ul>
        <li> <a href="#" class="">Stylish Bag</a>
          <ul>
            <li> <a href="grid.html" class="">Clutch Handbags</a> </li>
            <li> <a href="grid.html" class="">Diaper Bags</a> </li>
            <li> <a href="grid.html" class="">Bags</a> </li>
            <li> <a href="grid.html" class="">Hobo handbags</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Material Bag</a>
          <ul>
            <li> <a href="grid.html">Beaded Handbags</a> </li>
            <li> <a href="grid.html">Fabric Handbags</a> </li>
            <li> <a href="grid.html">Handbags</a> </li>
            <li> <a href="grid.html">Leather Handbags</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Shoes</a>
          <ul>
            <li> <a href="grid.html">Flat Shoes</a> </li>
            <li> <a href="grid.html">Flat Sandals</a> </li>
            <li> <a href="grid.html">Boots</a> </li>
            <li> <a href="grid.html">Heels</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Jwellery</a>
          <ul>
            <li> <a href="grid.html">Bracelets</a> </li>
            <li> <a href="grid.html">Necklaces &amp; Pendent</a> </li>
            <li> <a href="grid.html">Pendants</a> </li>
            <li> <a href="grid.html">Pins &amp; Brooches</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Dresses</a>
          <ul>
            <li> <a href="grid.html">Casual Dresses</a> </li>
            <li> <a href="grid.html">Evening</a> </li>
            <li> <a href="grid.html">Designer</a> </li>
            <li> <a href="grid.html">Party</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Swimwear</a>
          <ul>
            <li> <a href="grid.html">Swimsuits</a> </li>
            <li> <a href="grid.html">Beach Clothing</a> </li>
            <li> <a href="grid.html">Clothing</a> </li>
            <li> <a href="grid.html">Bikinis</a> </li>
          </ul>
        </li>
      </ul>
    </li>
    <li> <a href="grid.html">Men</a>
      <ul>
        <li> <a href="grid.html" class="">Shoes</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="grid.html">Sport Shoes</a> </li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Casual Shoes</a> </li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Leather Shoes</a> </li>
            <li class="level2 nav-6-1-1"><a href="grid.html">canvas shoes</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Dresses</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="grid.html">Casual Dresses</a> </li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Evening</a> </li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Designer</a> </li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Party</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Jackets</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="grid.html">Coats</a> </li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Formal Jackets</a> </li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Leather Jackets</a> </li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Blazers</a> </li>
          </ul>
        </li>
        <li> <a href="#.html">Watches</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="grid.html">Fasttrack</a> </li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Casio</a> </li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Titan</a> </li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Tommy-Hilfiger</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Sunglasses</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="grid.html">Ray Ban</a> </li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Fasttrack</a> </li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Police</a> </li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Oakley</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Accesories</a>
          <ul class="level1">
            <li class="level2 nav-6-1-1"><a href="grid.html">Backpacks</a> </li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Wallets</a> </li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Laptops Bags</a> </li>
            <li class="level2 nav-6-1-1"><a href="grid.html">Belts</a> </li>
          </ul>
        </li>
      </ul>
    </li>
    <li> <a href="grid.html">Electronics</a>
      <ul>
        <li> <a href="grid.html"><span>Mobiles</span></a>
          <ul>
            <li> <a href="grid.html"><span>Samsung</span></a> </li>
            <li> <a href="grid.html"><span>Nokia</span></a> </li>
            <li> <a href="grid.html"><span>IPhone</span></a> </li>
            <li> <a href="grid.html"><span>Sony</span></a> </li>
          </ul>
        </li>
        <li> <a href="grid.html" class=""><span>Accesories</span></a>
          <ul>
            <li> <a href="grid.html"><span>Mobile Memory Cards</span></a> </li>
            <li> <a href="grid.html"><span>Cases &amp; Covers</span></a> </li>
            <li> <a href="grid.html"><span>Mobile Headphones</span></a> </li>
            <li> <a href="grid.html"><span>Bluetooth Headsets</span></a> </li>
          </ul>
        </li>
        <li> <a href="grid.html"><span>Cameras</span></a>
          <ul>
            <li> <a href="grid.html"><span>Camcorders</span></a> </li>
            <li> <a href="grid.html"><span>Point &amp; Shoot</span></a> </li>
            <li> <a href="grid.html"><span>Digital SLR</span></a> </li>
            <li> <a href="grid.html"><span>Camera Accesories</span></a> </li>
          </ul>
        </li>
        <li> <a href="grid.html"><span>Audio &amp; Video</span></a>
          <ul>
            <li> <a href="grid.html"><span>MP3 Players</span></a> </li>
            <li> <a href="grid.html"><span>IPods</span></a> </li>
            <li> <a href="grid.html"><span>Speakers</span></a> </li>
            <li> <a href="grid.html"><span>Video Players</span></a> </li>
          </ul>
        </li>
        <li> <a href="grid.html"><span>Computer</span></a>
          <ul>
            <li> <a href="grid.html"><span>External Hard Disk</span></a> </li>
            <li> <a href="grid.html"><span>Pendrives</span></a> </li>
            <li> <a href="grid.html"><span>Headphones</span></a> </li>
            <li> <a href="grid.html"><span>PC Components</span></a> </li>
          </ul>
        </li>
        <li> <a href="grid.html"><span>Appliances</span></a>
          <ul>
            <li> <a href="grid.html"><span>Vaccum Cleaners</span></a> </li>
            <li> <a href="grid.html"><span>Indoor Lighting</span></a> </li>
            <li> <a href="grid.html"><span>Kitchen Tools</span></a> </li>
            <li> <a href="grid.html"><span>Water Purifier</span></a> </li>
          </ul>
        </li>
      </ul>
    </li>
    <li> <a href="grid.html">Furniture</a>
      <ul>
        <li> <a href="grid.html">Living Room</a>
          <ul>
            <li> <a href="grid.html">Racks &amp; Cabinets</a> </li>
            <li> <a href="grid.html">Sofas</a> </li>
            <li> <a href="grid.html">Chairs</a> </li>
            <li> <a href="grid.html">Tables</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html" class="">Dining &amp; Bar</a>
          <ul>
            <li> <a href="grid.html">Dining Table Sets</a> </li>
            <li> <a href="grid.html">Serving Trolleys</a> </li>
            <li> <a href="grid.html">Bar Counters</a> </li>
            <li> <a href="grid.html">Dining Cabinets</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Bedroom</a>
          <ul>
            <li> <a href="grid.html">Beds</a> </li>
            <li> <a href="grid.html">Chest of Drawers</a> </li>
            <li> <a href="grid.html">Wardrobes &amp; Almirahs</a> </li>
            <li> <a href="grid.html">Nightstands</a> </li>
          </ul>
        </li>
        <li> <a href="grid.html">Kitchen</a>
          <ul>
            <li> <a href="grid.html">Kitchen Racks</a> </li>
            <li> <a href="grid.html">Kitchen Fillings</a> </li>
            <li> <a href="grid.html">Wall Units</a> </li>
            <li> <a href="grid.html">Benches &amp; Stools</a> </li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="grid.html">Kids</a> </li>
    <li><a href="contact-us.html">Contact Us</a> </li>
  </ul>
  <div class="top-links">
    <ul class="links">
      <li><a title="My Account" href="login.html">My Account</a> </li>
      <li><a title="Wishlist" href="wishlist.html">Wishlist</a> </li>
      <li><a title="Checkout" href="checkout.html">Checkout</a> </li>
      <li><a title="Blog" href="blog.html"><span>Blog</span></a> </li>
      <li class="last"><a title="Login" href="login.html"><span>Login</span></a> </li>
    </ul>
  </div>
</div>
<!-- JavaScript -->

<script type="text/javascript" src="{{ asset('assets/front/js/jquery-3.2.1.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('assets/front/js/bootstrap.min.js') }}"></script>  
<script type="text/javascript" src="{{ asset('assets/front/js/revslider.js') }}"></script> 
<script type="text/javascript" src="{{ asset('assets/front/js/common.js') }}"></script> 
<script type="text/javascript" src="{{ asset('assets/front/js/owl.carousel.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('assets/front/js/jquery.mobile-menu.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('assets/front/js/countdown.js') }}"></script> 
<script type='text/javascript'>
      jQuery(document).ready(function() {
      jQuery('#rev_slider_4').show().revolution({
      dottedOverlay: 'none',
      delay: 5000,
      startwidth: 850,
      startheight: 428,
      hideThumbs: 200,
      thumbWidth: 200,
      thumbHeight: 50,
      thumbAmount: 2,
      navigationType: 'thumb',
      navigationArrows: 'solo',
      navigationStyle: 'round',
      touchenabled: 'on',
      onHoverStop: 'on',
      swipe_velocity: 0.7,
      swipe_min_touches: 1,
      swipe_max_touches: 1,
      drag_block_vertical: false,
      spinner: 'spinner0',
      keyboardNavigation: 'off',
      navigationHAlign: 'center',
      navigationVAlign: 'bottom',
      navigationHOffset: 0,
      navigationVOffset: 20,
      soloArrowLeftHalign: 'left',
      soloArrowLeftValign: 'center',
      soloArrowLeftHOffset: 20,
      soloArrowLeftVOffset: 0,
      soloArrowRightHalign: 'right',
      soloArrowRightValign: 'center',
      soloArrowRightHOffset: 20,
      soloArrowRightVOffset: 0,
      shadow: 0,
      fullWidth: 'on',
      fullScreen: 'off',
      stopLoop: 'off',
      stopAfterLoops: -1,
      stopAtSlide: -1,
      shuffle: 'off',
      autoHeight: 'off',
      forceFullWidth: 'on',
      fullScreenAlignForce: 'off',
      minFullScreenHeight: 0,
      hideNavDelayOnMobile: 1500,
      hideThumbsOnMobile: 'off',
      hideBulletsOnMobile: 'off',
      hideArrowsOnMobile: 'off',
      hideThumbsUnderResolution: 0,
      hideSliderAtLimit: 0,
      hideCaptionAtLimit: 0,
      hideAllCaptionAtLilmit: 0,
      startWithSlide: 0,
      fullScreenOffsetContainer: ''
      });
      });
    </script> 
<!-- Hot Deals Timer 1--> 
<script type="text/javascript">
      var dthen1 = new Date("12/25/17 11:59:00 PM");
      start = "08/04/15 03:02:11 AM";
      start_date = Date.parse(start);
      var dnow1 = new Date(start_date);
      if (CountStepper > 0)
      ddiff = new Date((dnow1) - (dthen1));
      else
      ddiff = new Date((dthen1) - (dnow1));
      gsecs1 = Math.floor(ddiff.valueOf() / 1000);
      
      var iid1 = "countbox_1";
      CountBack_slider(gsecs1, "countbox_1", 1);
    </script>
</body>
</html>
