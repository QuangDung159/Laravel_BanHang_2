<div id="header">
    <div class="header-top">
        <div class="container">
            <div class="pull-left auto-width-left">
                <ul class="top-menu menu-beta l-inline">
                    <li><a href=""><i class="fa fa-home"></i> 90-92 Lê Thị Riêng, Bến Thành, Quận 1</a></li>
                    <li><a href=""><i class="fa fa-phone"></i> 0163 296 7751</a></li>
                </ul>
            </div>
            <div class="pull-right auto-width-right">
                <ul class="top-details menu-beta l-inline">
                    <li><a href="#"><i class="fa fa-user"></i>Tài khoản</a></li>
                    <li><a href="#">Đăng kí</a></li>
                    <li><a href="#">Đăng nhập</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div> <!-- .container -->
    </div> <!-- .header-top -->
    <div class="header-body">
        <div class="container beta-relative">
            <div class="pull-left">
                <a href="index.html" id="logo"><img src="{{asset('assets/images/logo-cake.png')}}" width="200px" alt=""></a>
            </div>
            <div class="pull-right beta-components space-left ov">
                <div class="space10">&nbsp;</div>
                <div class="beta-comp">
                    <form role="search" method="get" id="searchform" action="/">
                        <input type="text" value="" name="s" id="s" placeholder="Nhập từ khóa..."/>
                        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
                    </form>
                </div>

                <div class="beta-comp">
                    <div class="cart">
                        <div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng
                            ({{$listItemInCart->count()}}) <i
                                class="fa fa-chevron-down"></i></div>
                        <div class="beta-dropdown cart-body">
                            @foreach($listItemInCart as $key => $itemInCart)
                                <div class="cart-item">
                                    <div class="media">
                                        <a class="pull-left" href="{{URL::to('/product')}}/{{$itemInCart->id}}"><img
                                                src="{{asset('assets/images/products')}}/{{$itemInCart->options->image}}"
                                                alt=""></a>
                                        <div class="media-body">
                                            <span class="cart-item-title">{{$itemInCart->name}}</span>
                                            <span
                                                class="cart-item-amount">{{$itemInCart->qty}} x <span>${{$itemInCart->price}}</span></span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="cart-item" style="text-align: right">
                                <span
                                    class="cart-item-amount">Total : <span>${{$cartTotal}}</span></span>
                                <div style="text-align: right">
                                    <a class="beta-btn primary"
                                       href="{{URL::to('/cart')}}">Check out<i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- .cart -->
                </div>
            </div>
            <div class="clearfix"></div>
        </div> <!-- .container -->
    </div> <!-- .header-body -->

    <div class="header-bottom" style="background-color: #0277b8;">
        <div class="container">
            <a class="visible-xs beta-menu-toggle pull-right" href="#"><span
                    class='beta - menu - toggle - text'>Menu</span>
                <i class="fa fa-bars"></i></a>
            <div class="visible-xs clearfix"></div>
            <nav class="main-menu">
                <ul class="l-inline ov">
                    <li><a href="{{URL::to('/')}}">Home</a></li>
                    <li><a href="/">Product Type</a>
                        <ul class="sub-menu">
                            @foreach($listProductType as $key => $productType)
                                <li>
                                    <a href="{{URL::to('/product-by-type')}}/{{$productType->product_type_id}}">{{$productType->product_type_name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{URL::to('/about')}}">About</a></li>
                    <li><a href="{{URL::to('/contact')}}">Contact</a></li>
                </ul>
                <div class="clearfix"></div>
            </nav>
        </div> <!-- .container -->
    </div> <!-- .header-bottom -->

    <div class="space50">&nbsp;</div>

    <?php
    if (Session::has('msg_add_to_cart_success')) {
        echo
            '<div class="container">
            <div class="alert alert-success alert-dismissible fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong>' . Session::get('msg_add_to_cart_success') . '
        </div >
        </div > ';

        Session::forget('msg_add_to_cart_success');
    }
    ?>

    <?php
    if (Session::has('msg_remove_item_from_cart_success')) {
        echo
            '<div class="container">
            <div class="alert alert-success alert-dismissible fade in">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success! </strong>' . Session::get('msg_remove_item_from_cart_success') . '
        </div >
        </div > ';

        Session::forget('msg_remove_item_from_cart_success');
    }
    ?>
</div> <!-- #header -->
