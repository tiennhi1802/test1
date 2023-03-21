@extends('admin.index')
@section('css')
   
@endsection
@section('content')
    <div class="admin-content-right">
        <div class="admin-content-user_add">
            <h1>Thay đổi tên danh mục</h1>
            <div class="form">
                <form action="{{ route('optiontoping.update', $data->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <p>Tên danh mục<span>*</span></p>
                    <p>Option Toping Name<span>*</span></p>
                    <input required name="name" type="text" value="{{$data->name}}"/>
                    <p>Option Toping Price<span>*</span></p>
                    <input required name="price" type="text" value="{{$data->price}}"/>
                    <div class="bg-input">
                        <button class="button" type="submit">Lưu</button>
                        <a class="button" href="category_list.php">Thoát</a>
                    </div>
                </form>

            </div>
        </div>
    </div>

    </section>
    </body>

    </html>
@endsection
