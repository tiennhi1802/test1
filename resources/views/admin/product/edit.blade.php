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
            <form action="{{route('product.update',$product->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <!--Thuộc tính giúp tải up file lên-->
                <label for="">Nhập tên sản phẩm<span style="color: red;">*</span> </label>
                <input name="product_name" type="text" value="{{ $product->product_name }}" />
                <label for="">Chọn danh mục<span style="color: red;">*</span> </label>
                <select name="category" id="">
                    @foreach ($category as $item)
                        <option @if ($item->category_name == $product->category) {{ 'selected' }} @endif
                            value="{{ $item->category_name }}">{{ $item->category_name }}</option>
                    @endforeach
                </select>
                <label for="">Giá sản phẩm<span style="color: red;">*</span> </label>
                <input name="product_price" type="text" value="{{ $product->product_price }}" />
                <label for="">Mô tả sản phẩm<span style="color: red;">*</span> </label>
                <textarea name="product_desc" id="" cols="30" rows="10" placeholder="Mô tả sản phẩm">{{ $product->product_desc }}</textarea>
                <label for="">Ảnh sản phẩm<span style="color: red;">*</span> </label>
                <input id="file" name="product_img" type="file" />
                <img width="200px" src="{{ $product->product_img }}" alt="">
                <i><span style="color: red; margin-left:10px;"></span></i>
                <button type="submit">Thêm</button>
            </form>
        </div>
        </section>
        </body>

        </html>
    @endsection
    @section('js')
        <script>
            $('#file').on('change', function() {
                _readFileDataUrl(this, function(err, files) {
                    if (err) {
                        return
                    }
                    console.log(files) //contains base64 encoded string array holding the 
                    image data
                });
            });
            var _readFileDataUrl = function(input, callback) {
                var len = input.files.length,
                    _files = [],
                    res = [];
                var readFile = function(filePos) {
                    if (!filePos) {
                        callback(false, res);
                    } else {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            res.push(e.target.result);
                            readFile(_files.shift());
                        };
                        reader.readAsDataURL(filePos);
                    }
                };
                for (var x = 0; x < len; x++) {
                    _files.push(input.files[x]);
                }
                readFile(_files.shift());
            };
        </script>
    @endsection
