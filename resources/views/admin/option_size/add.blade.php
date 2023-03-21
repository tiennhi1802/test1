@extends('admin.index')
@section('content')
    <div class="admin-content-right">
        <div class="admin-content-user_add">
            <h1>Thêm Danh Mục</h1>
            <div class="form">
                <form action="{{ route('optionsize.store') }}" method="POST">
                    @csrf
                    <p>Option Size Name<span>*</span></p>
                    <input required name="name" type="text" />
                    <p>Option Size Price<span>*</span></p>
                    <input required name="price" type="text" />
                    <div class="bg-input"><input class="button" type="submit" value="Thêm"></div>
                </form>
            </div>
        </div>
    </div>
    </section>
    </body>

    </html>
@endsection
