@extends('master')
@section('content')
    <div class="rev-slider">
        <div class="fullwidthbanner-container">
            <div class="fullwidthbanner">
                <div class="bannercontainer">
                    <div class="banner">
                        <ul>
                        @foreach($listSlide as $key => $slide)
                            <!-- THE FIRST SLIDE -->
                                <li data-transition="boxfade" data-slotamount="20" class="active-revslide"
                                    style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                                    <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined"
                                         data-zoomstart="undefined" data-zoomend="undefined"
                                         data-rotationstart="undefined"
                                         data-rotationend="undefined" data-ease="undefined"
                                         data-bgpositionend="undefined"
                                         data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined"
                                         data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined"
                                         data-oheight="undefined">
                                        <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover"
                                             data-bgposition="center center" data-bgrepeat="no-repeat"
                                             data-lazydone="undefined"
                                             src="{{asset('assets/images/slide')}}/{{$slide->slide_image}}"
                                             data-src="{{asset('assets/images/slide')}}/{{$slide->slide_image}}"
                                             style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('{{asset('assets/images/slide')}}/{{$slide->slide_image}}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="tp-bannertimer"></div>
            </div>
        </div>
        <!--slider-->
    </div>
    <div class="container">
        <div id="content" class="space-top-none">
            <div class="main-content">
                <div class="space60">&nbsp;</div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="beta-products-list">
                            <h4>New Products</h4>

                            <div class="row">
                                @foreach($listNewProduct as $key => $product)
                                    <div class="col-sm-3">
                                        <div class="single-item">
                                            <div class="single-item-header">
                                                <a href="product.html"><img
                                                        src="{{asset('assets/images/products/')}}/{{$product->product_image}}"
                                                        width="330" height="160"
                                                        alt=""></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">{{$product->product_name}}</p>
                                                <p class="single-item-price">
                                                    @if ($product->product_promotion_price != 0)
                                                        <span class="flash-del">${{$product->product_unit_price}}</span>
                                                        <span
                                                            class="flash-sale">${{$product->product_promotion_price}}
                                                        </span>
                                                    @else
                                                        <span>${{$product->product_unit_price}}</span>
                                                    @endif
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="shopping_cart.html"><i
                                                        class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="product.html">Details <i
                                                        class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div> <!-- .beta-products-list -->

                        <div class="space50">&nbsp;</div>

                        <div class="beta-products-list">
                            <h4>Top Products</h4>
                            <div class="row">
                                @foreach($listTopProduct as $key => $product)
                                    <div class="col-sm-3">
                                        <div class="single-item">
                                            <div class="single-item-header">
                                                <a href="product.html"><img
                                                        src="{{asset('assets/images/products/')}}/{{$product->product_image}}"
                                                        width="330" height="160"
                                                        alt=""></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title">{{$product->product_name}}</p>
                                                <p class="single-item-price">
                                                    @if ($product->product_promotion_price != 0)
                                                        <span class="flash-del">${{$product->product_unit_price}}</span>
                                                        <span
                                                            class="flash-sale">${{$product->product_promotion_price}}
                                                        </span>
                                                    @else
                                                        <span>${{$product->product_unit_price}}</span>
                                                    @endif
                                                </p>
                                            </div>
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left" href="shopping_cart.html"><i
                                                        class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary" href="product.html">Details <i
                                                        class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div> <!-- .beta-products-list -->
                    </div>
                </div> <!-- end section with sidebar and main content -->
            </div> <!-- .main-content -->
        </div> <!-- #content -->
    </div> <!-- .container -->
@endsection
