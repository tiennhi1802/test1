@extends('admin.index')
@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
@endsection
@section('content')

<div class="admin-content-right">
<div class="admin-content-right-product_list">
                <h1 style="text-align: center; font-size: 30px; text-transform: uppercase;">Danh sách sản phẩm</h1>
                <table>
                    <tr>
                        <th>STT</th>
                        <th>Ảnh sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá</th>
                        <th>Mô tả sản phẩm</th>
                        <th>Danh mục</th>
                        <th>Thao tác</th>
                    </tr>
                    @foreach ($data as $each)
                    <tr>
                        <td>{{$each->id}}</td>
                        <td><img src="{{asset('n6/admin/uploads').'/' .$each->product_img}}" alt=""  style="width:200px;height:150px;"></td>
                        <td>{{$each->product_name}}</td>
                        <td>{{$each->product_price}}</td>
                        <td>{{$each->product_desc}}</td>
                        <td>{{$each->category}}</td>
                        <td>
                            <a href="category_update.php?category_id={{$each->id}}"><span class='fa fa-pencil'></a>
                            <a href="category_delete.php?category_id={{$each->id}}"><span class='fa fa-trash'></a>
                        </td>
                    </tr> 
                    @endforeach     
                </table>
                <div class="float-right" style="margin-top: 20px ; margin-right: 20px">
                    {{$data->links()}}
                </div>
            </div>
        </div>

    </section>
</body>
</html>

@endsection
@section('js')
    
@endsection