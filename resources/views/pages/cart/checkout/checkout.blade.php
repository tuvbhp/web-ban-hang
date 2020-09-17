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
                <h2 class="heading">Step1</h2>
            </div>
            <div class="checkout-options">
                <h3> Quý khách xin vui lòng điền thông tin để mua hàng. </h3>
            </div>
            <!--/checkout-options-->

            <div class="register-req">
                <p>Please Checkout to easily get access to your order history</p>
            </div>
            <!--/register-req-->

            <div class="shopper-informations">
                <div class="row">

                    <div class="col-sm-12 clearfix">
                        <div class="bill-to">
                            <p>Bill To</p>
                            <div class="form-one">
                                <form method="post" action="{{ route('store.bill') }}">
                                    @csrf
                                    <input type="text" placeholder="Tên" name="name">
                                    <input type="email" placeholder="Email*" name="email">
                                    <input type="text" placeholder="Số điện thoại *" name="phone">
                                    <input type="text" placeholder="Địa chỉ nơi ở" name='address1'>
                                    <input type="text" placeholder="Địa chỉ nơi nhận hàng" name='address2'>
                                    <div class="form-group">
                                        <label>Lưu ý đơn hàng </label>
                                        <textarea type="text" class="form-control " placeholder="Nhập nội dung"
                                            name="content" rows="6"></textarea>
                                    </div>
                                    <div class="payment-options">
                                        <button type="submit" class="btn btn-primary">Đặt Hàng</button>
                                    </div>
                                </form>
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
                                                            <td><span>{{ number_format(($total * 110) / 100) }} VNĐ</span>
                                                            </td>
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
