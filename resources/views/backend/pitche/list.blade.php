@extends('backend.master')
@section('title', 'Danh sách sân bóng')
@section('content')

    <div class="main-content">
        <div id="page-wrapper">
            <div class="main-page">
                <div class="tables">
                    <h3 class="title1">List Pitch</h3>
                    <div class="search-box">
                        <form method="post" action="{{ route('pitche.search') }}" class="input">
                            @csrf
                            <input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" name="search" id="input-31" onkeyup="search"/>
                            <label class="input__label" for="input-31">
                                <svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                                    <path d="m0,0l404,0l0,77l-404,0l0,-77z"/>
                                </svg>
                            </label>
                        </form>
                    </div>
                    <div class="panel-body widget-shadow">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Address</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($pitches) === 0)
                                <tr>
                                    <td colspan="5" class="text-center">Không có dữ liệu</td>
                                </tr>
                            @else
                                @foreach($pitches as $key => $pitche)
                                    <tr>
                                        <th scope="row">{{ $key + $pitches->firstItem() }}</th>
                                        <td>{{ $pitche->name }}</td>
                                        <td>{{ $pitche->type }}</td>
                                        <td>{{ $pitche->address }}</td>
                                        <td>
                                            <img class="img-thumbnail img-fluid" style="display: block !important; max-width: 25% !important; height: auto !important" src="{{ asset('images/'.$pitche->image) }}" alt="">
                                        </td>
                                        <td>
                                            <a href="{{ route('pitche.edit', $pitche->id) }}" class="btn btn-success">sửa</a>
                                            <a href="{{ route('pitche.delete', $pitche->id) }}" class="btn btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                        <div style="float: right;">{{ $pitches->links( "pagination::bootstrap-4") }}</div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
