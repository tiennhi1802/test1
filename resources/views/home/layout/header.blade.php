<div id="header">
    <div class="grid wides header-item">
        <ul class="rows header-list">
            <li class=" header-list-item">
                <a class="cols" href="">
                    <i class=" mr-4 header-list-icon fa-solid fa-phone-volume"></i>
                    <span>Hotline: 0799 xxx xxx</span>
                </a>
            </li>
        </ul>
        <ul class=" row header-list">



            <li class="col header-list-item ancart">
                <a class="col-4 " href="{{ route('cart') }}">
                    <i class="mr-4   fa-sharp fa-solid fa-bag-shopping header-list-icon icon-cart">
                        <div class="number_cart">{{ count($dataCart) }}</div>
                    </i>
                    <span>Giỏ hàng</span>
                    <div class="header-cart test">
                        @if (isset($dataCart))
                            @if (count($dataCart) == 0)
                                <img width="100%" style=" scale: .7;"
                                    src="https://uptoaltar.github.io/TeaHouse/assets/img/empty-cart.webp"
                                    alt="">
                            @else
                                <div class="title">sản phẩm</div>
                                @foreach ($dataCart as $item)
                                    <a href="" class="header-cart-product">
                                        <div class="header-cart-produc-left">
                                            <img width="40px" height="40px" src="{{ $item->product_img }}"
                                                alt="">
                                            <div class="name">{{ $item->product_name }}</div>
                                        </div>
                                        <div class="header-cart-produc-right">
                                            <div class="price"><sup>đ </sup>{{ number_format($item->product_price) }}
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                                <div class="go_cart" href=""><a href="{{ route('cart') }}">Thanh toán</a></div>
                            @endif
                        @endif
                    </div>
                </a>

            </li>

        </ul>

    </div>
</div>

<div id="navmain">
    <div class="grid wides">
        <div class="rows navmain-bg">
            <div class="navmain-item">
                <ul class="rows navmain-list">
                    <li class="mr-30 cols navmain-list-item"><a href="#bg">Trang chủ</a></li>
                    <li class="mr-30 cols navmain-list-item"><a href="#time-open">Giới thiệu</a>
                    </li>
                    <li class="mr-30 cols navmain-list-item"><a href="#menu">Sản phẩm</a>
                    </li>
                </ul>
            </div>
            <div class="navmain-item">
                <a href="{{ route('show') }}"><img src="{{ asset('n6/assets/img/logo.webp') }}" alt=""></a>
            </div>
            <div class="navmain-item">
                <ul class="rows navmain-list">
                    <li class="mr-30 cols navmain-list-item"><a href="#bg">Tin tức</a></li>
                    <li class="mr-30 cols navmain-list-item"><a href="#footer">Khuyến mãi</a></li>
                    <!-- <li class="mr-30 cols navmain-list-item"><a href="">Thực đơn</a></li> -->
                    <li class="cols navmain-list-item"><a href="#footer">Liên hệ</a></li>
                </ul>
            </div>
        </div>

    </div>

</div>
