@extends('home')

{{-- css --}}
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@endsection


@section('content')
    @include('home.layout.slider')

    <div id="container">
        <!--Menu-->
        <div id="menu">
            <div class="grid wide">
                <div class="rows menu-bg">
                    <img src="{{ asset('n6/assets/img/logo.webp') }}" alt="">
                    <div class="menu-title">Menu Hôm Nay</div>
                    <div class="rows menu-nav">
                        <!-- Danh mục -->
                        @foreach ($dataCategory as $each)
                            {{-- {{dd($dataCategory)}} --}}
                            <a class="button" href="{{ route('menu', ['name' => $each->category_name]) }}#menu">
                                {{ $each->category_name }}
                            </a>
                        @endforeach

                    </div>

                    <div class="rows menu-product container">
                        @foreach ($data as $each)
                            <a href="{{ route('productDetail', $each->id) }}" class="rows c-3 bg-product">
                                <div class="img"><img src="{{ $each->product_img }}" alt=""/>
                                </div>
                                <div class="title"><b>{{ $each->product_name }}</b></div>
                                <div class="price"><b>{{ $each->product_price }}</b></div>
                            </a>
                        @endforeach
                    </div>

                    {{ $data->links() }}
                </div>
            </div>

            <!--Giờ mở cửa && đặt bàn-->
            <div id="time-open">
                <div class="rows time-open-bg">
                    <!-- <img src="./assets/img/body__time-picture.webp" alt=""> -->
                    <div class="rows time-open-item time-open-left">
                        <img class="img-title" src="{{ asset('n6/assets/img/title_base_2.webp') }}" alt="">
                        <div class="title">Thời gian mở cửa</div>
                        <div class="text">“Cà phê nhé" - Một lời hẹn rất riêng của người Việt. Một lời ngỏ mộc
                            mạc để
                            mình ngồi lại bên nhau và sẻ chia câu chuyện của riêng mình. Nhà Cà phê hẹn gặp bạn chốn
                            quen
                            thuộc.</div>
                        <div class="time">T2 - T6: 8h30 - 21h30</div>
                        <div class="time">T7 - CN: 8h00 - 22h00</div>
                        <a href="" class="button">Đặt bàn ngay</a>
                        <img class="time-logo" src="{{ asset('n6/assets/img/body__time-logo.webp') }}" alt="">
                    </div>
                    <div class="time-open-item time-open-right">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


{{-- js --}}
@section('js')
    <script src="{{ asset('n6/js/slides.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
@endsection
