@extends('admin.index')
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@endsection
@section('content')
    {{-- @if (isset($file_path))
        <img width="100px" height="100px" src="{{ $file_path }}" alt="">
    @endif --}}
    <div class="admin-content-right">
        <div class="admin-content-right-product_add">
            <h1 style=" font-size: 30px; text-transform: uppercase;">Thêm Sản Phẩm</h1>
            <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <!--Thuộc tính giúp tải up file lên-->
                <label for="">Nhập tên sản phẩm<span style="color: red;">*</span> </label>
                <input name="product_name" type="text" />
                <label for="">Chọn danh mục<span style="color: red;">*</span> </label>
                <select name="category" id="">
                    @foreach ($category as $item)
                        <option value="{{ $item->category_name }}">{{ $item->category_name }}</option>
                    @endforeach
                </select>
                <label for="">Giá sản phẩm<span style="color: red;">*</span> </label>
                <input name="product_price" type="text" />
                <label for="">Mô tả sản phẩm<span style="color: red;">*</span> </label>
                <textarea name="product_desc" id="" cols="30" rows="10" placeholder="Mô tả sản phẩm"></textarea>
                <label for="">Ảnh sản phẩm<span style="color: red;">*</span> </label>
                <input name="product_img" type="file" />
                <i><span style="color: red; margin-left:10px;"></span></i>
                <button type="submit">Thêm</button>
            </form>
        </div>
        </section>
        </body>
        </html>
    @endsection
    @section('js')
    @endsection
