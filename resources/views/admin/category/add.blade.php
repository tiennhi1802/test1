@extends('admin.index')
@section('content')
    <div class="admin-content-right">
        <div class="admin-content-user_add">
            <h1>Thêm Danh Mục</h1>
            <div class="form">
                <form action="{{ route('category.store') }}" method="POST">
                    @csrf
                    <p>Tên danh mục<span>*</span></p>
                    <input required name="category_name" type="text" />
                    <div class="bg-input"><input class="button" type="submit" value="Thêm"></div>
                </form>
            </div>
        </div>
    </div>
    </section>
    </body>

    </html>
@endsection
