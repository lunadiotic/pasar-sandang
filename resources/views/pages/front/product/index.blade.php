@extends('layouts.front.app')

@section('title')
 | Products | All Product
@endsection

@push('body-tag')
    <Body class="grid-page"> 
@endpush

@section('content')
<section class="main-container col2-left-layout">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-sm-push-3">
                <!-- Breadcrumbs -->
                <div class="breadcrumbs">
                    <ul>
                        <li class="home"> <a href="index.html" title="Go to Home Page">Home</a> <span>/</span> </li>
                        <li class="category1599"> <a href="grid.html" title="">Women</a> <span>/ </span> </li>
                        <li class="category1600"> <a href="grid.html" title="">Styliest Bag</a> <span>/</span> </li>
                        <li class="category1601"> <strong>Clutch Handbags</strong> </li>
                    </ul>
                </div>
                <!-- Breadcrumbs End -->
                <div class="page-title">
                    <h2 class="page-heading"> <span class="page-heading-title">Women</span> </h2>
                </div>
                <div class="category-description std">
                    <div class="slider-items-products">
                        <div id="category-desc-slider" class="product-flexslider hidden-buttons">
                            <div class="slider-items slider-width-col1 owl-carousel owl-theme">
                                <!-- Item -->
                                <div class="item"> <a href="#"><img alt="" src="{{ asset('assets/front/images/category-img1.jpg') }}"></a> </div>
                                <!-- End Item -->
                                <!-- Item -->
                                <div class="item"> <a href="#"><img alt="" src="{{ asset('assets/front/images/category-img2.jpg') }}"></a>
                                    <!-- End Item -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <article class="col-main">
                    <div class="toolbar">
                        <div class="display-product-option">
                            <div class="pages">
                                <label>Page:</label>
                                <ul class="pagination">
                                    {!! $products->appends(compact('query'))->links() !!}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="category-products">
                        <ul class="products-grid">
                            @foreach ($products as $product)
                                <li class="item col-lg-3 col-md-4 col-sm-4 col-xs-6">
                                    <div class="item-inner">
                                        <div class="item-img">
                                            <div class="item-img-info"><a href="{{ route('product.detail', $product->slug) }}" title="{{ $product->name }}" class="product-image"><img src="{{ $product->photo_path }}" alt="{{ $product->name }}"></a>
                                            </div>
                                        </div>
                                        <div class="item-info">
                                            <div class="info-inner">
                                                <div class="item-title"><a href="{{ route('product.detail', $product->slug) }}" title="{{ $product->name }}">{{ $product->name }}</a></div>
                                                <div class="item-content">
                                                    <div class="item-price">
                                                        <div class="price-box"><span class="regular-price"><span class="price">Rp{{ number_format($product->price,2,'.',',') }}</span> </span>
                                                        </div>
                                                    </div>
                                                    <div class="action">
                                                            <form action="{{ route('cart.add') }}" method="post">
                                                                {{ csrf_field() }}
                                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                                <input type="hidden" name="quantity" value=1>
                                                                <button class="button btn-cart" type="submit" title="" data-original-title="Add to Cart"><span>Add to Cart</span> </button>
                                                            </form>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="toolbar">
                        <div class="display-product-option">
                            <div class="pages">
                                <label>Page:</label>
                                <ul class="pagination">
                                    {!! $products->appends(compact('query'))->links() !!}
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>
                <!--	///*///======    End article  ========= //*/// -->
            </div>
            <aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9">
                <div class="side-banner"><img src="{{ asset('assets/front/images/side-banner.jpg') }}" alt="banner"></div>
                <div class="block block-layered-nav">
                    <div class="block-title">Shop By</div>
                    <div class="block-content">
                        <p class="block-subtitle">Shopping Options</p>
                        <dl id="narrow-by-list">
                            <dt class="odd">Price</dt>
                            <dd class="odd">
                                <ol>
                                    <li> <a href="#"><span class="price">$0.00</span> - <span class="price">$99.99</span></a>                                        (6) </li>
                                    <li> <a href="#"><span class="price">$100.00</span> and above</a> (6) </li>
                                </ol>
                            </dd>
                            <dt class="even">Manufacturer</dt>
                            <dd class="even">
                                <ol>
                                    <li> <a href="#">TheBrand</a> (9) </li>
                                    <li> <a href="#">Company</a> (4) </li>
                                    <li> <a href="#">LogoFashion</a> (1) </li>
                                </ol>
                            </dd>
                            <dt class="odd">Color</dt>
                            <dd class="odd">
                                <ol>
                                    <li> <a href="#">Green</a> (1) </li>
                                    <li> <a href="#">White</a> (5) </li>
                                    <li> <a href="#">Black</a> (5) </li>
                                    <li> <a href="#">Gray</a> (4) </li>
                                    <li> <a href="#">Dark Gray</a> (3) </li>
                                    <li> <a href="#">Blue</a> (1) </li>
                                </ol>
                            </dd>
                            <dt class="last even">Size</dt>
                            <dd class="last even">
                                <ol>
                                    <li> <a href="#">S</a> (6) </li>
                                    <li> <a href="#">M</a> (6) </li>
                                    <li> <a href="#">L</a> (4) </li>
                                    <li> <a href="#">XL</a> (4) </li>
                                </ol>
                            </dd>
                        </dl>
                    </div>
                </div>
                <div class="block block-cart">
                    <div class="block-title ">My Cart</div>
                    <div class="block-content">
                        <div class="summary">
                            <p class="amount">There are <a href="shopping_cart.html">{{ Cart::content()->count() }} items</a> in your cart.</p>
                            <p class="subtotal"> <span class="label">Cart Subtotal:</span> <span class="price">Rp{{ Cart::total() }}</span> </p>
                        </div>
                        <div class="ajax-checkout">
                            <button class="button button-checkout" title="Submit" type="submit"><span>Checkout</span></button>
                        </div>
                        <p class="block-subtitle">Recently added item(s) </p>
                        <ul>
                            @foreach (Cart::content() as $item)
                            <li class="item"> 
                                <a href="shopping_cart.html" title="{{ $item->name }}" class="product-image">
                                    <img src="{{ $item->options->photo }}" alt="{{ $item->name }}">
                                </a>
                                <div class="product-details">
                                    <div class="access">
                                        {!! Form::open(['route' => ['cart.delete', $item->rowId], 'method' => 'DELETE', 'class' => 'form-inline']) !!}
                                            <button type="submit" class="btn-remove1" title="Remove This Item">
                                                    Remove
                                            </button>
                                        {!! Form::close() !!}                                                 
                                    </div>
                                    <strong>{{ $item->qty }}</strong> x <span class="price">Rp{{ number_format($item->price,2,",",".") }}</span>
                                    <p class="product-name"> <a href="shopping_cart.html">{{ $item->name }}</a> </p>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="block block-compare">
                    <div class="block-title ">Compare Products (2)</div>
                    <div class="block-content">
                        <ol id="compare-items">
                            <li class="item odd">
                                <input type="hidden" value="2173" class="compare-item-id">
                                <a class="btn-remove1" title="Remove This Item" href="#"></a> <a href="#" class="product-name"> Retis lapen casen...</a>                                </li>
                            <li class="item last even">
                                <input type="hidden" value="2174" class="compare-item-id">
                                <a class="btn-remove1" title="Remove This Item" href="#"></a> <a href="#" class="product-name"> Retis lapen casen...</a>                                </li>
                        </ol>
                        <div class="ajax-checkout">
                            <button type="submit" title="Submit" class="button button-compare"><span>Compare</span></button>
                            <button type="submit" title="Submit" class="button button-clear"><span>Clear</span></button>
                        </div>
                    </div>
                </div>
                <div class="custom-slider-wrap">
                    <div class="custom-slider-inner">
                        <div class="home-custom-slider">
                            <div>
                                <div class="sideoffer-banner">
                                    <a href="#" title="Side Offer Banner">
             
            <img class="hidden-xs" src="{{ asset('assets/front/images/custom-slide1.jpg') }}" alt="Side Offer Banner"></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block block-list block-viewed">
                    <div class="block-title"> Recently Viewed </div>
                    <div class="block-content">
                        <ol id="recently-viewed-items">
                            <li class="item odd">
                                <p class="product-name"><a href="#"> Retis lapen casen...</a></p>
                            </li>
                            <li class="item even">
                                <p class="product-name"><a href="#"> Retis lapen casen...</a></p>
                            </li>
                            <li class="item last odd">
                                <p class="product-name"><a href="#"> Retis lapen casen...</a></p>
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="block block-poll">
                    <div class="block-title">Community Poll </div>
                    <form id="pollForm" action="#" method="post" onSubmit="return validatePollAnswerIsSelected();">
                        <div class="block-content">
                            <p class="block-subtitle">What is your favorite Magento feature?</p>
                            <ul id="poll-answers">
                                <li class="odd">
                                    <input type="radio" name="vote" class="radio poll_vote" id="vote_5" value="5">
                                    <span class="label">
                    <label for="vote_5">Layered Navigation</label>
                    </span> </li>
                                <li class="even">
                                    <input type="radio" name="vote" class="radio poll_vote" id="vote_6" value="6">
                                    <span class="label">
                    <label for="vote_6">Price Rules</label>
                    </span> </li>
                                <li class="odd">
                                    <input type="radio" name="vote" class="radio poll_vote" id="vote_7" value="7">
                                    <span class="label">
                    <label for="vote_7">Category Management</label>
                    </span> </li>
                                <li class="last even">
                                    <input type="radio" name="vote" class="radio poll_vote" id="vote_8" value="8">
                                    <span class="label">
                    <label for="vote_8">Compare Products</label>
                    </span> </li>
                            </ul>
                            <div class="actions">
                                <button type="submit" title="Vote" class="button button-vote"><span>Vote</span></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div>
                    <div class="featured-add-box">
                        <div class="featured-add-inner"> <a href="#"> <img src="{{ asset('assets/front/images/hot-trends-banner.jpg') }}" alt="f-img"></a>
                            <div class="banner-content">
                                <div class="banner-text">Electronic's</div>
                                <div class="banner-text1">20% off</div>
                                <p>limited time offer</p>
                                <a href="#" class="view-bnt">Shop now</a> </div>
                        </div>
                    </div>
                </div>
                <div class="block block-tags">
                    <div class="block-title"> Popular Tags</div>
                    <div class="block-content">
                        <ul class="tags-list">
                            <li><a href="#" style="font-size:98.3333333333%;">Camera</a></li>
                            <li><a href="#" style="font-size:86.6666666667%;">Hohoho</a></li>
                            <li><a href="#" style="font-size:145%;">SEXY</a></li>
                            <li><a href="#" style="font-size:75%;">Tag</a></li>
                            <li><a href="#" style="font-size:110%;">Test</a></li>
                            <li><a href="#" style="font-size:86.6666666667%;">bones</a></li>
                            <li><a href="#" style="font-size:110%;">cool</a></li>
                            <li><a href="#" style="font-size:86.6666666667%;">cool t-shirt</a></li>
                            <li><a href="#" style="font-size:86.6666666667%;">crap</a></li>
                            <li><a href="#" style="font-size:86.6666666667%;">good</a></li>
                            <li><a href="#" style="font-size:86.6666666667%;">green</a></li>
                            <li><a href="#" style="font-size:86.6666666667%;">hip</a></li>
                            <li><a href="#" style="font-size:75%;">laptop</a></li>
                            <li><a href="#" style="font-size:75%;">mobile</a></li>
                            <li><a href="#" style="font-size:75%;">nice</a></li>
                            <li><a href="#" style="font-size:86.6666666667%;">phone</a></li>
                            <li><a href="#" style="font-size:98.3333333333%;">red</a></li>
                            <li><a href="#" style="font-size:86.6666666667%;">tight</a></li>
                            <li><a href="#" style="font-size:75%;">trendy</a></li>
                            <li><a href="#" style="font-size:86.6666666667%;">young</a></li>
                        </ul>
                        <div class="actions"> <a href="#" class="view-all">View All Tags</a> </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>
@endsection
 
@section('scripts')
@endsection