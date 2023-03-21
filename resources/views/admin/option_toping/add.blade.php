@extends('admin.index')
@section('css')
    
@endsection
@section('content')
    <div class="admin-content-right">
        <div class="admin-content-user_add">
            <h1>Thêm Danh Mục</h1>
            <div class="form">
                <form action="{{ route('optiontoping.store') }}" method="POST">
                    @csrf
                    <p>Option Toping Name<span>*</span></p>
                    <input required name="name" type="text" />
                    <p>Option Toping Price<span>*</span></p>
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
