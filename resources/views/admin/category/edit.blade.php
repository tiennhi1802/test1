@extends('admin.index')

@section('content')
    <div class="admin-content-right">
        <div class="admin-content-user_add">
            <h1>Thay đổi tên danh mục</h1>
            <div class="form">
                <form action="{{ route('category.update',$data->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <p>Tên danh mục<span>*</span></p>
                    <input name="category_name" type="text" placeholder="Nhập tên danh mục"
                        value="{{ $data->category_name }}" />
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
