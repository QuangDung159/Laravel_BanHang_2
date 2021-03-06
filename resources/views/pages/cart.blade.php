@extends('master')
@section('content')
    <div class="inner-header">
        <div class="container">
            <div class="pull-left">
                <h6 class="inner-title">Shopping Cart</h6>
            </div>
            <div class="pull-right">
                <div class="beta-breadcrumb font-large">
                    <a href="index.html">Home</a> / <span>Shopping Cart</span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="container">
        <div id="content">

            <div class="table-responsive">
                <!-- Shop Products Table -->
                <table class="shop_table beta-shopping-cart-table" cellspacing="0">
                    <thead>
                    <tr>
                        <th class="product-name">Product</th>
                        <th class="product-price">Price</th>
                        <th class="product-status">Status</th>
                        <th class="product-quantity">Qty.</th>
                        <th class="product-subtotal">Total</th>
                        <th class="product-remove">Remove</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($listItemInCart as $key => $itemInCart)
                        <tr class="cart_item">
                            <td class="product-name">
                                <div class="media">
                                    <img class="pull-left"
                                         src="{{asset('assets/images/products')}}/{{$itemInCart->options->image}}"
                                         alt="" width="66" height="32">
                                    <div class="media-body">
                                        <p class="font-large table-title">{{$itemInCart->name}}</p>
                                    </div>
                                </div>
                            </td>

                            <td class="product-price">
                                <span class="amount">${{$itemInCart->price}}</span>
                            </td>

                            <td class="product-status">
                                @if($itemInCart->options->stock > 0)
                                    <span class="label label-info">Available</span>
                                @else
                                    <span class="label label-warning">Out of stock</span>
                                @endif

                            </td>

                            <td class="product-price">
                                <span class="amount">{{$itemInCart->qty}}</span>
                            </td>

                            <td class="product-subtotal">
                                <span class="amount">${{$itemInCart->qty * $itemInCart->price}}</span>
                            </td>

                            <td class="product-remove">
                                <a href="{{URL::to('/cart')}}/{{$itemInCart->rowId}}" class="remove"
                                   title="Remove this item"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                    <tfoot>
                    <tr>
                        <td colspan="6" class="actions" style="text-align: right">
                            <button type="submit" class="beta-btn primary" name="proceed">Proceed to Checkout <i
                                    class="fa fa-chevron-right"></i></button>
                        </td>
                    </tr>
                    </tfoot>
                </table>
                <!-- End of Shop Table Products -->
            </div>


            <!-- Cart Collaterals -->
            <div class="cart-collaterals">
                <div class="cart-totals pull-right">
                    <div class="cart-totals-row"><h5 class="cart-total-title">Cart Totals</h5></div>
                    <div class="cart-totals-row"><span>Order Total:</span> <span>${{$cartTotal}}</span>
                    </div>
                </div>

                <div class="clearfix"></div>
            </div>
            <!-- End of Cart Collaterals -->
            <div class="clearfix"></div>

        </div> <!-- #content -->
    </div> <!-- .container -->
@endsection
