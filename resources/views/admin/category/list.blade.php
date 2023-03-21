@extends('admin.index')
@section('css')
    
@endsection
@section('content')
    <div class="admin-content-right">
        <div class="admin-content-right-category_list">
            <h1>Danh mục sản phẩm</h1>
            <table >
                <tr>
                    <th>STT</th>
                    <th>Danh mục</th>
                    <th>Thao tác</th>
                </tr>
                @foreach ($data as $each)
                    <tr>
                        <td>{{ $each->id }}</td>
                        <td>{{ $each->category_name }}</td>
                        <td style="display: flex; justify-content: center">
                            <a class="btn m-1 " href="{{ route('category.edit', $each->id) }}"><span
                                    class='fa fa-pencil'></a>
                            <form action="{{ route('category.delete', $each->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class=" m-1 btn " ><span class='fa fa-trash'></button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </table>
            <div class="float-right" style="margin: 20px 20px 0 0">
                {{ $data->links() }}
            </div>
        </div>
    </div>

    </section>
    </body>

    </html>
@endsection
@section('js')
@endsection
