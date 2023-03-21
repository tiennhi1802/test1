@extends('home')

{{-- css --}}
@section('css')
    <link rel="stylesheet" href="{{ asset('n6/assets/css/cart.css') }}">
@endsection


@section('content')
    <div id="container">
        <form action="{{ route('buy') }}" method="get">
            <div id="container-cart">
                <div class="bgcontainer-cart">
                    <h1><i class="icon-file fa-solid fa-file"></i>Xác nhận đơn hàng</h1>
                    <div class="container-cart-item">
                        <div class="item container-cart-left">
                            @if ($errors->any())
                                <div class="text text-danger text-center">
                                    <div style="color:red; font-size: 15px;">Vui lòng nhập đầy đủ và chính xác thông tin
                                        giao hàng</div>
                                </div>
                            @endif
                            <div class="left1">
                                <div class="left1-item left1-item1">Giao hàng</div>
                                <div class="left1-item left1-item2">Đổi phương thức</div>
                            </div>

                            <div class="left2">
                                @error('address')
                                    <div style="color:red;">{{ $message }}</div>
                                @enderror
                                <div class="left2-item">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1kG5010B81gxEYD05rk3_TGiIlwkTZaMP5-0eTPcWkxbN5iUObUMC&usqp=CAU"
                                        alt="">
                                    <div class="content">
                                        <p>Địa chỉ nhận hàng</p>
                                        <textarea name="address" class="ip" width="100%" type="text">{{ old('address') }}</textarea>
                                    </div>
                                </div>
                                @error('user_name')
                                    <div style="color:red;">{{ $message }}</div>
                                @enderror
                                <div class="left2-item">
                                    <input class="ip" name="user_name" width="100%" value="{{ old('user_name') }}"
                                        type="text" placeholder="Tên người nhận">
                                </div>
                                @error('sdt')
                                    <div style="color:red;">{{ $message }}</div>
                                @enderror
                                <div class="left2-item">
                                    <input class="ip" name="sdt" type="text" placeholder="Số điện thoại"
                                        value="{{ old('sdt') }}">
                                </div>

                                <div class="left2-item">
                                    <input class="ip" type="text" placeholder="Thêm hướng dẫn giao hàng">
                                </div>
                            </div>


                            <div class="left3">
                                <div class="left3-item">Phương thức thanh toán</div>
                            </div>
                            <div class="left4">
                                @error('check')
                                    <div style="color:red;">{{ $message }}</div>
                                @enderror
                                <div class="left4-item">
                                    <input type="radio" name="check">
                                    <img src="https://minio.thecoffeehouse.com/image/tchmobileapp/1000_photo_2021-04-06_11-17-08.jpg"
                                        alt="">
                                    <p>Tiền mặt</p>
                                </div>
                                <div class="left4-item">
                                    <input type="radio" name="check">
                                    <img src="https://minio.thecoffeehouse.com/image/tchmobileapp/386_ic_momo@3x.png"
                                        alt="">
                                    <p>MoMo</p>
                                </div>
                                <div class="left4-item">
                                    <input type="radio" name="check">
                                    <img src="https://minio.thecoffeehouse.com/image/tchmobileapp/388_ic_zalo@3x.png"
                                        alt="">
                                    <p>ZaloPay</p>
                                </div>
                                <div class="left4-item">
                                    <input type="radio" name="check">
                                    <img src="https://minio.thecoffeehouse.com/image/tchmobileapp/1120_1119_ShopeePay-Horizontal2_O.png"
                                        alt="">
                                    <p>ShopeePay</p>
                                </div>
                                <div class="left4-item">
                                    <input type="radio" name="check">
                                    <img src="https://minio.thecoffeehouse.com/image/tchmobileapp/385_ic_atm@3x.png"
                                        alt="">
                                    <p>Thẻ ngân hàng</p>
                                </div>

                            </div>
                            <div class="left5">
                                <input type="checkbox">
                                <p>Đồng ý với các <b class="span">điều khoản và điều kiện</b> mua hàng của Nhà Cà Phê
                                </p>
                            </div>

                        </div>
                        <div class="item container-cart-right">
                            <div class="right1">
                                <div class="item1">Các món đã chọn</div>
                                <a href="{{ route('show') }}#menu" class="item2">Thêm món</a>
                            </div>
                            @if (count($data) == 0)
                                <img width="100%" style="scale: .7;"
                                    src="https://uptoaltar.github.io/TeaHouse/assets/img/empty-cart.webp" alt="">
                            @endif
                            @for ($i = 0; $i < count($data); $i++)
                                <div class="right2">
                                    <div class="right2-left">
                                        <div class="right2-item">
                                            <img src="{{ $data[$i]->product_img }}" alt="">
                                        </div>
                                        <div class="right2-item">
                                            <div class="info-product name-product">{{ $data[$i]->product_name }}</div>
                                            <div class="info-product size-product">Size : {{ $size[$i]->name }} </div>
                                            <div class="info-product toping-product">Topping : {{ $toping[$i]->name }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right2-left">
                                        <div class="right2-item">
                                            <div class="price-product"><span>{{ $data[$i]->amount }}đ</span></div>
                                        </div>
                                        <div class="right2-item">
                                            <a href="{{ route('deleteCart', $data[$i]->id) }}"><i
                                                    class="icon-delete-product fa-solid fa-circle-xmark"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endfor()

                            <div class="right3">
                                Tổng cộng
                            </div>
                            <div class="right5">
                                <p>Thành tiền</p>
                                <div class="price">{{ $total }}đ</div>
                            </div>
                            <div class="right4"></div>
                        </div>
                        <div class="buy-product">
                            <div class="buy-product-item-left">
                                <p>Thành tiền</p>
                                <div class="price"><b>{{ $total }}đ</b></div>
                            </div>
                            <div class="buy-product-item-right">
                                <input class="btn" type="submit" value="Đặt hàng">
                                <!-- <div class="btn">Đặt hàng</div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection


{{-- js --}}
@section('js')
@endsection
