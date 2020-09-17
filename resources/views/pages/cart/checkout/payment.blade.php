@extends('pages.master')
@section('title', 'Checkout')
@section('content')
    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Check out</li>
                </ol>
            </div>
            <!--/breadcrums-->

            <div class="step-one">
                <h1 class="heading"> Mua hàng thành công</h1>
            </div>

            <!--/checkout-options-->
            <div class="shopper-informations">
                <div class="row">

                    <div class="col-sm-12 clearfix">
                        <div class="bill-to">
                            <p>Bill</p>
                            <div class="form-one">
                                @foreach ($bills as $bill)
                                    <div> Tên khách hàng: {{ $bill->name }}</div>
                                    <div>Số Điện Thoại: {{ $bill->phone }} </div>
                                    <div>Địa chỉ giao hàng: {{ $bill->address2 }} </div>
                                    <div>Ghi chú: {{ $bill->content }} </div>
                                @endforeach
                                <div class="review-payment">
                                    <h2>Review & Payment</h2>
                                </div>
                                <div class="table-responsive cart_info">
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col"> Product Name</th>
                                                <th scope="col">Product Image</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Quantity</th>
                                                <th scope="total">Total Product</th>
                                            </tr>
                                        </thead>
                                        @php
                                        $total = 0;
                                        @endphp
                                        <tbody>
                                            @foreach ($carts as $id => $cart)
                                                @php
                                                $total += $cart['quantity'] * $cart['price'];
                                                @endphp
                                                <tr>
                                                    <th scope="row_{{ $id }}"></th>
                                                    <td>{{ $cart['name'] }}</td>
                                                    <td>
                                                        <img class="img_cart" src="{{ $cart['image'] }}" alt="" />
                                                    </td>
                                                    <td>{{ number_format($cart['price']) }} VNĐ</td>
                                                    <td>{{ $cart['quantity'] }}</td>
                                                    <td>{{ number_format($cart['price'] * $cart['quantity']) }} VNĐ</td>
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <td colspan="4">&nbsp;</td>
                                                <td colspan="2">
                                                    <table class="table table-condensed total-result">
                                                        <tr>
                                                            <td>Cart Sub Total</td>
                                                            <td>{{ number_format($total) }} VNĐ</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Thuế(VAT)</td>
                                                            <td>10%</td>
                                                        </tr>
                                                        <tr class="shipping-cost">
                                                            <td>Shipping Cost</td>
                                                            <td>Free</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Total</td>
                                                            <td><span>{{ number_format(($total * 110) / 100) }}
                                                                    VNĐ</span></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
