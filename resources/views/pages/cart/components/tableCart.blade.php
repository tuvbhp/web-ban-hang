<div class="cart_wrapper">
    <section id="cart_items">
        <div class="container_cart" data-url="{{ route('deleteCart') }}">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li class="active">Shopping Cart</li>
                </ol>
            </div>
            <div class="table-responsive cart_info">
                <table class="table table-condensed update_cart_url" data-url="{{ route('updateCart') }}">
                    <thead class="cart_menu">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"> Product Name</th>
                            <th scope="col">Product Image</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="total">Total Product</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    @php
                    $total = 0;
                    @endphp
                    <tbody>
                        @if (is_array($carts)){
                            @foreach ($carts as $id => $cart)
                                @php
                                $total += $cart['quantity'] * $cart['price'];
                                @endphp
                                <tr>
                                    <th scope="row">{{ $id }}</th>
                                    <td>{{ $cart['name'] }}</td>
                                    <td>
                                        <img class="img_cart" src="{{ $cart['image'] }}" alt="" />
                                    </td>
                                    <td>{{ number_format($cart['price']) }} VNĐ</td>
                                    <td><input type="number" value="{{ $cart['quantity'] }}" min="1" class="quantity">
                                    </td>
                                    <td>{{ number_format($cart['price'] * $cart['quantity']) }} VNĐ</td>
                                    <td class="action">
                                        <a href="" data-id="{{ $id }}" class="btn btn-success cart_update">Cập Nhật</a>
                                        <a href="" data-id="{{ $id }}" class="btn btn-success cart_delete"> Xóa</a>
                                    </td>
                                </tr>
                            @endforeach}
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section id="do_action">
        <div class="container">
            <div class="col-sm-6">
                <div class="total_area">
                    <ul>
                        <li>Cart Sub Total <span>{{ number_format($total) }}VNĐ</span></li>
                        <li>Thuế(VAT) <span>10%</span></li>
                        <li>Shipping Cost <span>free</span></li>
                        <li>Total <span>{{ number_format(($total * 110) / 100) }} VNĐ</span></li>
                    </ul>
                    <a class="btn btn-default check_out" href="{{ route('checkoutCart') }}">Đặt Hàng</a>
                </div>
            </div>
        </div>
</div>
</section>
</div>
