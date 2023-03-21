<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="{{asset('n6/admin/main.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    @yield('css')
</head>

<body>
<img class="img-logo1" src="{{asset('n6/assets/img/logo.webp')}}" alt="">
    <header>
        <div id="bg-header-admin">
            <a href="{{route('admin.index')}}"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ43fbvLFe8evGPwwSmvx9iIsepT4B7dCPeSQ&usqp=CAU" alt=""></a>
        </div>
    </header>
    <section class="admin-content">
        <div class="admin-content-left">
            <ul>
           
                <li><a herf="#">Danh mục</a>
                    <ul>
                        <li><a href="{{route('category.create')}}">Thêm Danh mục</a></li>
                        <li><a href="{{route('category.index')}}">Danh sách Danh mục</a></li>
                    </ul>
                </li>
                <li><a herf="#">Sản phẩm</a>
                    <ul>
                        <li><a href="{{route('product.create')}}">Thêm sản phẩm</a></li>
                        <li><a href="{{route('product.index')}}">Danh sách sản phẩm</a></li>
                    </ul>
                </li>
                <li><a herf="#">Option size</a>
                    <ul>
                        <li><a href="{{route('optionsize.create')}}">Thêm size sản phẩm</a></li>
                        <li><a href="{{route('optionsize.index')}}">Danh sách size sản phẩm</a></li>
                    </ul>
                </li>
                <li><a herf="#">Option topping</a>
                    <ul>
                        <li><a href="{{route('optiontoping.create')}}">Thêm toping sản phẩm</a></li>
                        <li><a href="{{route('optiontoping.index')}}">Danh sách toping sản phẩm</a></li>
                    </ul>
                </li>
               
            </ul>
        </div>
        @yield('content')
        @yield('js')