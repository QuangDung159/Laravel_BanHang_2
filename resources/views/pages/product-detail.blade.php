@extends('master')
@section('content')
    <div class="inner-header">
        <div class="container">
            <div class="pull-left">
                <h6 class="inner-title">Product</h6>
            </div>
            <div class="pull-right">
                <div class="beta-breadcrumb font-large">
                    <a href="index.html">Home</a> / <span>Product</span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="container">
        <div id="content">
            <div class="row">
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="{{asset('assets/images/products')}}/{{$product->product_image}}" alt="">
                        </div>
                        <div class="col-sm-8">
                            <div class="single-item-body">
                                <p class="single-item-title">{{$product->product_name}}</p>
                                @if ($product->product_promotion_price != 0)
                                    <div class="ribbon-wrapper">
                                        <div class="ribbon sale">Sale</div>
                                    </div>
                                    <p class="single-item-price">
                                        <span class="flash-del">${{$product->product_unit_price}}</span>
                                        <span class="flash-sale">${{$product->product_promotion_price}}
                                                        </span>
                                    </p>
                                @else
                                    <p class="single-item-price">
                                        <span>${{$product->product_unit_price}}</span>
                                    </p>
                                @endif
                            </div>

                            <div class="clearfix"></div>
                            <div class="space20">&nbsp;</div>

                            <div class="single-item-desc">
                                <p>{{$product->product_description}}</p>
                            </div>
                            <div class="space20">&nbsp;</div>
                        </div>
                    </div>

                    <div class="space40">&nbsp;</div>
                    <div class="woocommerce-tabs">
                        <ul class="tabs">
                            <li><a href="#tab-description">Description</a></li>
                            <li><a href="#tab-reviews">Reviews (0)</a></li>
                        </ul>

                        <div class="panel" id="tab-description">
                            <p>{{$product->product_description}}</p>
                        </div>
                        <div class="panel" id="tab-reviews">
                            <p>No Reviews</p>
                        </div>
                    </div>
                    <div class="space50">&nbsp;</div>
                    <div class="beta-products-list">
                        <h4>Related Products</h4>
                        <div class="space50">&nbsp;</div>
                        <div class="row">
                            @foreach($listProductRelated as $key => $productRelated)
                                <div class="col-sm-4">
                                    <div class="single-item">
                                        <div class="single-item-header">
                                            <a href="{{URL::to('/product')}}/{{$productRelated->product_id}}"><img
                                                    src="{{asset('assets/images/products')}}/{{$productRelated->product_image}}"
                                                    width="330" height="160"
                                                    alt=""></a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title">{{$productRelated->product_name}}</p>
                                            @if ($product->product_promotion_price != 0)
                                                <div class="ribbon-wrapper">
                                                    <div class="ribbon sale">Sale</div>
                                                </div>
                                                <p class="single-item-price">
                                                    <span class="flash-del">${{$product->product_unit_price}}</span>
                                                    <span class="flash-sale">${{$product->product_promotion_price}}
                                                        </span>
                                                </p>
                                            @else
                                                <p class="single-item-price">
                                                    <span>${{$product->product_unit_price}}</span>
                                                </p>
                                            @endif
                                        </div>
                                        <div class="single-item-caption">
                                            <a class="add-to-cart pull-left" href="#"><i
                                                    class="fa fa-shopping-cart"></i></a>
                                            <a class="beta-btn primary" href="{{URL::to('/product')}}/{{$productRelated->product_id}}">Details <i
                                                    class="fa fa-chevron-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div> <!-- .beta-products-list -->
                </div>
                <div class="col-sm-3 aside">
                    <div class="widget">
                        <h3 class="widget-title">Best Sellers</h3>
                        <div class="widget-body">
                            <div class="beta-sales beta-lists">
                                @foreach($listProductBest as $key => $productBest)
                                    <div class="media beta-sales-item">
                                        <a class="pull-left" href="{{URL::to('/product')}}/{{$productBest->product_id}}"><img
                                                src="{{asset('assets/images/products')}}/{{$productBest->product_image}}"
                                                alt="" width="330" height="160"></a>
                                        <div class="media-body">
                                            {{$productBest->product_name}}
                                            @if ($productBest->product_promotion_price != 0)
                                                <p class="single-item-price">
                                                    <span class="flash-del">${{$productBest->product_unit_price}}</span>
                                                    <span class="flash-sale">${{$productBest->product_promotion_price}}
                                                        </span>
                                                </p>
                                            @else
                                                <p class="single-item-price">
                                                    <span>${{$productBest->product_unit_price}}</span>
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div> <!-- best sellers widget -->
                    <div class="widget">
                        <h3 class="widget-title">New Products</h3>
                        <div class="widget-body">
                            <div class="beta-sales beta-lists">
                                @foreach($listProductNew as $key => $productNew)
                                    <div class="media beta-sales-item">
                                        <a class="pull-left" href="{{URL::to('/product')}}/{{$productNew->product_id}}"><img
                                                src="{{asset('assets/images/products')}}/{{$productNew->product_image}}"
                                                alt="" width="330" height="160"></a>
                                        <div class="media-body">
                                            {{$productNew->product_name}}
                                            @if ($productNew->product_promotion_price != 0)
                                                <p class="single-item-price">
                                                    <span class="flash-del">${{$productNew->product_unit_price}}</span>
                                                    <span class="flash-sale">${{$productNew->product_promotion_price}}
                                                        </span>
                                                </p>
                                            @else
                                                <p class="single-item-price">
                                                    <span>${{$productNew->product_unit_price}}</span>
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div> <!-- best sellers widget -->
                </div>
            </div>
        </div> <!-- #content -->
    </div> <!-- .container -->
@endsection
