@extends('backend.master')
@section('title', 'Danh sách khách hàng')
@section('content')

    <div class="main-content">
        <div id="page-wrapper">
            <div class="main-page">
                <div class="tables">
                    <h3 class="title1">List Customer</h3>
                    <div class="search-box">
                        <form method="post" action="{{ route('customer.search') }}" class="input">
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
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($customers) === 0)
                                <tr>
                                    <td colspan="5" class="text-center">Không có dữ liệu</td>
                                </tr>
                            @else
                                @foreach($customers as $key => $customer)
                                    <tr>
                                        <th scope="row">{{ $key + $customers->firstItem() }}</th>
                                        <td>{{ $customer->name }}</td>
                                        <td>{{ $customer->phone }}</td>
                                        <td>{{ $customer->address }}</td>
                                        <td>
                                            <a href="{{ route('customer.edit', $customer->id) }}" class="btn btn-success">sửa</a>
                                            <a href="{{ route('customer.delete', $customer->id) }}" class="btn btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                        <div style="float: right;">{{ $customers->links( "pagination::bootstrap-4") }}</div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
