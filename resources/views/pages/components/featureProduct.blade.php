<div class="main-container col1-layout">
    <div class="container">
        <div class="row">

            <!-- Home Tabs  -->
            <div class="col-sm-8 col-md-9 col-xs-12">
                <div class="home-tab">
                    <ul class="nav home-nav-tabs home-product-tabs">
                        <li class="active"><a href="#featured" data-toggle="tab" aria-expanded="false">Featured
                                products</a></li>
                        <li class="divider"></li>
                        <li> <a href="#top-sellers" data-toggle="tab" aria-expanded="false">Top Sellers</a>
                        </li>
                    </ul>
                    <div id="productTabContent" class="tab-content">
                        <div class="tab-pane active in" id="featured">
                            <div class="featured-pro">
                                <div class="slider-items-products">
                                    <div id="featured-slider" class="product-flexslider hidden-buttons">
                                        <div class="slider-items slider-width-col4">
                                            @foreach ($products as $product)
                                                <div class="product-item">
                                                    <div class="item-inner">
                                                        <div class="product-thumbnail">
                                                            <div class="icon-sale-label sale-left">Sale</div>
                                                            <div class="icon-new-label new-right">New</div>
                                                            <div class="pr-img-area"> <a
                                                                    title="Ipsums Dolors Untra"
                                                                    href="single_product.html')}}">
                                                                    <figure> <img class="first-img"
                                                                            src="{{ $product->feature_image_path }}"
                                                                            alt="html template"> <img
                                                                            class="hover-img"
                                                                            src="{{ $product->feature_image_path }}"
                                                                            alt="html template"></figure>
                                                                </a>
                                                                <button type="button" class="add-to-cart-mt"> <i
                                                                        class="fa fa-shopping-cart"></i><span>
                                                                        Add to Cart</span> </button>
                                                            </div>
                                                            <div class="pr-info-area">
                                                                <div class="pr-button">
                                                                    <div class="mt-button add_to_wishlist"> <a
                                                                            href="wishlist.html')}}"> <i
                                                                                class="fa fa-heart"></i> </a>
                                                                    </div>
                                                                    <div class="mt-button add_to_compare"> <a
                                                                            href="compare.html')}}"> <i
                                                                                class="fa fa-signal"></i> </a>
                                                                    </div>
                                                                    <div class="mt-button quick-view"> <a
                                                                            href="quick_view.html')}}"> <i
                                                                                class="fa fa-search"></i> </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="item-info">
                                                            <div class="info-inner">
                                                                <div class="item-title"> <a
                                                                        title="Ipsums Dolors Untra"
                                                                        href="single_product.html')}}">Ipsums
                                                                        Dolors
                                                                        Untra </a> </div>
                                                                <div class="item-content">
                                                                    <div class="rating"> <i
                                                                            class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i> <i
                                                                            class="fa fa-star-o"></i> <i
                                                                            class="fa fa-star-o"></i> <i
                                                                            class="fa fa-star-o"></i> </div>
                                                                    <div class="item-price">
                                                                        <div class="price-box"> <span
                                                                                class="regular-price"> <span
                                                                                    class="price">$125.00</span>
                                                                            </span> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="top-sellers">
                            <div class="top-sellers-pro">
                                <div class="slider-items-products">
                                    <div id="top-sellers-slider" class="product-flexslider hidden-buttons">
                                        <div class="slider-items slider-width-col4 ">
                                            <div class="product-item">
                                                <div class="item-inner">
                                                    <div class="product-thumbnail">
                                                        <div class="icon-sale-label sale-left">Sale</div>
                                                        <div class="icon-new-label new-right">New</div>
                                                        <div class="pr-img-area"> <a title="Ipsums Dolors Untra"
                                                                href="single_product.html')}}">
                                                                <figure> <img class="first-img"
                                                                        src="{{ asset('pages/images/products/img03.jpg') }}"
                                                                        alt="html template"> <img
                                                                        class="hover-img"
                                                                        src="{{ asset('pages/images/products/img03.jpg') }}"
                                                                        alt="html template"></figure>
                                                            </a>
                                                            <button type="button" class="add-to-cart-mt"> <i
                                                                    class="fa fa-shopping-cart"></i><span> Add
                                                                    to Cart</span> </button>
                                                        </div>
                                                        <div class="pr-info-area">
                                                            <div class="pr-button">
                                                                <div class="mt-button add_to_wishlist"> <a
                                                                        href="wishlist.html')}}"> <i
                                                                            class="fa fa-heart"></i> </a> </div>
                                                                <div class="mt-button add_to_compare"> <a
                                                                        href="compare.html')}}"> <i
                                                                            class="fa fa-signal"></i> </a>
                                                                </div>
                                                                <div class="mt-button quick-view"> <a
                                                                        href="quick_view.html')}}"> <i
                                                                            class="fa fa-search"></i> </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a
                                                                    title="Ipsums Dolors Untra"
                                                                    href="single_product.html')}}">Ipsums Dolors
                                                                    Untra </a> </div>
                                                            <div class="item-content">
                                                                <div class="rating"> <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i> <i
                                                                        class="fa fa-star"></i> <i
                                                                        class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i> </div>
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span
                                                                            class="regular-price"> <span
                                                                                class="price">$125.00</span>
                                                                        </span> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item">
                                                <div class="item-inner">
                                                    <div class="product-thumbnail">
                                                        <div class="icon-sale-label sale-left">Sale</div>
                                                        <div class="pr-img-area"> <a title="Ipsums Dolors Untra"
                                                                href="single_product.html')}}">
                                                                <figure> <img class="first-img"
                                                                        src="{{ asset('pages/images/products/img08.jpg') }}"
                                                                        alt="html template"> <img
                                                                        class="hover-img"
                                                                        src="{{ asset('pages/images/products/img08.jpg') }}"
                                                                        alt="html template"></figure>
                                                            </a>
                                                            <button type="button" class="add-to-cart-mt"> <i
                                                                    class="fa fa-shopping-cart"></i><span> Add
                                                                    to Cart</span> </button>
                                                        </div>
                                                        <div class="pr-info-area">
                                                            <div class="pr-button">
                                                                <div class="mt-button add_to_wishlist"> <a
                                                                        href="wishlist.html')}}"> <i
                                                                            class="fa fa-heart"></i> </a> </div>
                                                                <div class="mt-button add_to_compare"> <a
                                                                        href="compare.html')}}"> <i
                                                                            class="fa fa-signal"></i> </a>
                                                                </div>
                                                                <div class="mt-button quick-view"> <a
                                                                        href="quick_view.html')}}"> <i
                                                                            class="fa fa-search"></i> </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a
                                                                    title="Ipsums Dolors Untra"
                                                                    href="single_product.html')}}">Ipsums Dolors
                                                                    Untra </a> </div>
                                                            <div class="item-content">
                                                                <div class="rating"> <i
                                                                        class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i> </div>
                                                                <div class="item-price">
                                                                    <div class="price-box">
                                                                        <p class="special-price"> <span
                                                                                class="price-label">Special
                                                                                Price</span> <span
                                                                                class="price"> $456.00 </span>
                                                                        </p>
                                                                        <p class="old-price"> <span
                                                                                class="price-label">Regular
                                                                                Price:</span> <span
                                                                                class="price"> $567.00 </span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item">
                                                <div class="item-inner">
                                                    <div class="product-thumbnail">
                                                        <div class="pr-img-area"> <a title="Ipsums Dolors Untra"
                                                                href="single_product.html')}}">
                                                                <figure> <img class="first-img"
                                                                        src="{{ asset('pages/images/products/img01.jpg') }}"
                                                                        alt="html template"> <img
                                                                        class="hover-img"
                                                                        src="{{ asset('pages/images/products/img01.jpg') }}"
                                                                        alt="html template"></figure>
                                                            </a>
                                                            <button type="button" class="add-to-cart-mt"> <i
                                                                    class="fa fa-shopping-cart"></i><span> Add
                                                                    to Cart</span> </button>
                                                        </div>
                                                        <div class="pr-info-area">
                                                            <div class="pr-button">
                                                                <div class="mt-button add_to_wishlist"> <a
                                                                        href="wishlist.html')}}"> <i
                                                                            class="fa fa-heart"></i> </a> </div>
                                                                <div class="mt-button add_to_compare"> <a
                                                                        href="compare.html')}}"> <i
                                                                            class="fa fa-signal"></i> </a>
                                                                </div>
                                                                <div class="mt-button quick-view"> <a
                                                                        href="quick_view.html')}}"> <i
                                                                            class="fa fa-search"></i> </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a
                                                                    title="Ipsums Dolors Untra"
                                                                    href="single_product.html')}}">Ipsums Dolors
                                                                    Untra </a> </div>
                                                            <div class="item-content">
                                                                <div class="rating"> <i
                                                                        class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i> </div>
                                                                <div class="item-price">
                                                                    <div class="price-box">
                                                                        <p class="special-price"> <span
                                                                                class="price-label">Special
                                                                                Price</span> <span
                                                                                class="price"> $456.00 </span>
                                                                        </p>
                                                                        <p class="old-price"> <span
                                                                                class="price-label">Regular
                                                                                Price:</span> <span
                                                                                class="price"> $567.00 </span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item">
                                                <div class="item-inner">
                                                    <div class="product-thumbnail">
                                                        <div class="pr-img-area"> <a title="Ipsums Dolors Untra"
                                                                href="single_product.html')}}">
                                                                <figure> <img class="first-img"
                                                                        src="{{ asset('pages/images/products/img04.jpg') }}"
                                                                        alt="html template"> <img
                                                                        class="hover-img"
                                                                        src="{{ asset('pages/images/products/img04.jpg') }}"
                                                                        alt="html template"></figure>
                                                            </a>
                                                            <button type="button" class="add-to-cart-mt"> <i
                                                                    class="fa fa-shopping-cart"></i><span> Add
                                                                    to Cart</span> </button>
                                                        </div>
                                                        <div class="pr-info-area">
                                                            <div class="pr-button">
                                                                <div class="mt-button add_to_wishlist"> <a
                                                                        href="wishlist.html')}}"> <i
                                                                            class="fa fa-heart"></i> </a> </div>
                                                                <div class="mt-button add_to_compare"> <a
                                                                        href="compare.html')}}"> <i
                                                                            class="fa fa-signal"></i> </a>
                                                                </div>
                                                                <div class="mt-button quick-view"> <a
                                                                        href="quick_view.html')}}"> <i
                                                                            class="fa fa-search"></i> </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a
                                                                    title="Ipsums Dolors Untra"
                                                                    href="single_product.html')}}">Ipsums Dolors
                                                                    Untra </a> </div>
                                                            <div class="item-content">
                                                                <div class="rating"> <i
                                                                        class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i> </div>
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span
                                                                            class="regular-price"> <span
                                                                                class="price">$125.00</span>
                                                                        </span> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item">
                                                <div class="item-inner">
                                                    <div class="product-thumbnail">
                                                        <div class="pr-img-area"> <a title="Ipsums Dolors Untra"
                                                                href="single_product.html')}}">
                                                                <figure> <img class="first-img"
                                                                        src="{{ asset('pages/images/products/img05.jpg') }}"
                                                                        alt="html template"> <img
                                                                        class="hover-img"
                                                                        src="{{ asset('pages/images/products/img05.jpg') }}"
                                                                        alt="html template"></figure>
                                                            </a>
                                                            <button type="button" class="add-to-cart-mt"> <i
                                                                    class="fa fa-shopping-cart"></i><span> Add
                                                                    to Cart</span> </button>
                                                        </div>
                                                        <div class="pr-info-area">
                                                            <div class="pr-button">
                                                                <div class="mt-button add_to_wishlist"> <a
                                                                        href="wishlist.html')}}"> <i
                                                                            class="fa fa-heart"></i> </a> </div>
                                                                <div class="mt-button add_to_compare"> <a
                                                                        href="compare.html')}}"> <i
                                                                            class="fa fa-signal"></i> </a>
                                                                </div>
                                                                <div class="mt-button quick-view"> <a
                                                                        href="quick_view.html')}}"> <i
                                                                            class="fa fa-search"></i> </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a
                                                                    title="Ipsums Dolors Untra"
                                                                    href="single_product.html')}}">Ipsums Dolors
                                                                    Untra </a> </div>
                                                            <div class="item-content">
                                                                <div class="rating"> <i
                                                                        class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i> </div>
                                                                <div class="item-price">
                                                                    <div class="price-box">
                                                                        <p class="special-price"> <span
                                                                                class="price-label">Special
                                                                                Price</span> <span
                                                                                class="price"> $456.00 </span>
                                                                        </p>
                                                                        <p class="old-price"> <span
                                                                                class="price-label">Regular
                                                                                Price:</span> <span
                                                                                class="price"> $567.00 </span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item">
                                                <div class="item-inner">
                                                    <div class="product-thumbnail">
                                                        <div class="pr-img-area"> <a title="Ipsums Dolors Untra"
                                                                href="single_product.html')}}">
                                                                <figure> <img class="first-img"
                                                                        src="{{ asset('pages/images/products/img06.jpg') }}"
                                                                        alt="html template"> <img
                                                                        class="hover-img"
                                                                        src="{{ asset('pages/images/products/img06.jpg') }}"
                                                                        alt="html template"></figure>
                                                            </a>
                                                        <a href="" data-url="{{route('addToCart',['id'=>$product->id])}}" class="add-to-cart-mt add_to_cart">
                                                                <i class="fa fa-shopping-cart"></i>
                                                                <span> Add to Cart</span> 
                                                            </a>
                                                        </div>
                                                        <div class="pr-info-area">
                                                            <div class="pr-button">
                                                                <div class="mt-button add_to_wishlist"> <a
                                                                        href="wishlist.html')}}"> <i
                                                                            class="fa fa-heart"></i> </a> </div>
                                                                <div class="mt-button add_to_compare"> <a
                                                                        href="compare.html')}}"> <i
                                                                            class="fa fa-signal"></i> </a>
                                                                </div>
                                                                <div class="mt-button quick-view"> <a
                                                                        href="quick_view.html')}}"> <i
                                                                            class="fa fa-search"></i> </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-info">
                                                        <div class="info-inner">
                                                            <div class="item-title"> <a
                                                                    title="Ipsums Dolors Untra"
                                                                    href="single_product.html')}}">Ipsums Dolors
                                                                    Untra </a> </div>
                                                            <div class="item-content">
                                                                <div class="rating"> <i
                                                                        class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i> <i
                                                                        class="fa fa-star-o"></i> </div>
                                                                <div class="item-price">
                                                                    <div class="price-box"> <span
                                                                            class="regular-price"> <span
                                                                                class="price">$125.00</span>
                                                                        </span> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Hot deal -->
            <div class="col-md-3 col-sm-4 col-xs-12 hot-products">
                <div class="hot-deal"> <span class="title-text">Hot deal</span>
                    <ul class="products-grid">
                        <li class="item">
                            <div class="product-item">
                                <div class="item-inner">
                                    <div class="product-thumbnail">
                                        <div class="icon-hot-label hot-right">Hot</div>
                                        <div class="pr-img-area"> <a title="Ipsums Dolors Untra"
                                                href="single_product.html')}}">
                                                <figure> <img class="first-img"
                                                        src="{{ asset('pages/images/products/img15.jpg') }}"
                                                        alt="html template"> <img class="hover-img"
                                                        src="{{ asset('pages/images/products/img15.jpg') }}"
                                                        alt="html template">
                                                </figure>
                                            </a>
                                            <button type="button" class="add-to-cart-mt"> <i
                                                    class="fa fa-shopping-cart"></i><span> Add to Cart</span>
                                            </button>
                                        </div>
                                        <div class="jtv-box-timer">
                                            <div class="countbox_1 jtv-timer-grid"></div>
                                        </div>
                                        <div class="pr-info-area">
                                            <div class="pr-button">
                                                <div class="mt-button add_to_wishlist"> <a
                                                        href="wishlist.html')}}">
                                                        <i class="fa fa-heart"></i> </a> </div>
                                                <div class="mt-button add_to_compare"> <a
                                                        href="compare.html')}}">
                                                        <i class="fa fa-signal"></i> </a> </div>
                                                <div class="mt-button quick-view"> <a
                                                        href="quick_view.html')}}"> <i class="fa fa-search"></i>
                                                    </a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a title="Ipsums Dolors Untra"
                                                    href="single_product.html')}}">Ipsums Dolors Untra </a>
                                            </div>
                                            <div class="item-content">
                                                <div class="rating"> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i
                                                        class="fa fa-star-o"></i> <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="item-price">
                                                    <div class="price-box"> <span class="regular-price"> <span
                                                                class="price">$125.00</span> </span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>