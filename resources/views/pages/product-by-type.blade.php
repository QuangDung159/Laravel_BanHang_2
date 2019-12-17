@extends('master')
@section('content')
    <div class="inner-header">
        <div class="container">
            <div class="pull-left">
                <h6 class="inner-title">Sản phẩm</h6>
            </div>
            <div class="pull-right">
                <div class="beta-breadcrumb font-large">
                    <a href="index.html">Home</a> / <span>Sản phẩm</span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="container">
        <div id="content" class="space-top-none">
            <div class="main-content">
                <div class="space60">&nbsp;</div>
                <div class="row">
                    <div class="col-sm-3">
                        <ul class="aside-menu">
                            @foreach($listProductType as $key => $productType)
                                <li>
                                    <a href="{{URL::to('/product-by-type')}}/{{$productType->product_type_id}}">{{$productType->product_type_name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-sm-9">
                        <div class="beta-products-list">
                            <h4>{{$productTypeName}}</h4>
                            <div class="beta-products-details">
                                <p class="pull-left">
                                    Showing {{$listProduct->firstItem()}} - {{$listProduct->lastItem()}}
                                    of {{$listProduct->total()}} product(s)
                                </p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="row">
                                <?php
                                $count = 0
                                ?>
                                @foreach($listProduct as $key => $product)
                                    <div class="col-sm-4">
                                        <div class="single-item">
                                            <div class="single-item-header">
                                                <a href="{{URL::to('/product')}}/{{$product->product_id}}"><img
                                                        src="{{asset('/assets/images/products')}}/{{$product->product_image}}"
                                                        width="330" height="160"
                                                        alt=""></a>
                                            </div>
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
                                            <div class="single-item-caption">
                                                <a class="add-to-cart pull-left"
                                                   href="{{URL::to('/add-product-to-cart')}}/{{$product->product_id}}/{{$product->product_type_id}}"><i
                                                        class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary"
                                                   href="{{URL::to('/product')}}/{{$product->product_id}}">Details <i
                                                        class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $count++
                                    ?>
                                    @if ($count % 3 == 0)
                                        <div class="space50">&nbsp;</div>
                                        <?php
                                        $count = 0
                                        ?>
                                    @endif
                                @endforeach
                            </div>
                            <div style="text-align: center">
                                {!!$listProduct->links()!!}
                            </div>
                        </div> <!-- .beta-products-list -->
                    </div>
                </div> <!-- end section with sidebar and main content -->
            </div> <!-- .main-content -->
        </div> <!-- #content -->
    </div> <!-- .container -->
@endsection
