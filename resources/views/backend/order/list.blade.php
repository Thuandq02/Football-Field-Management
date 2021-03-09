@extends('backend.master')
@section('title', 'Danh sách đơn hàng')
@section('content')

    <div class="main-content">
        <div id="page-wrapper">
            <div class="main-page">
                <div class="tables">
                    <h3 class="title1">List Order</h3>
                    <div class="search-box">
                        <form method="post" action="{{ route('order.search') }}" class="input">
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
                                <th>Customer</th>
                                <th>Name Pitch</th>
                                <th>Type Pitch</th>
                                <th>Starting Time</th>
                                <th>End Time</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($orders) === 0)
                                <tr>
                                    <td colspan="5" class="text-center">Không có dữ liệu</td>
                                </tr>
                            @else
                                @foreach($orders as $key => $order)
                                    <tr>
                                        <th scope="row">{{ $key + $orders->firstItem()}}</th>
                                        <td>{{ $order->customers->name }}</td>
                                        <td>{{ $order->pitches->name }}</td>
                                        <td>{{ $order->pitches->type }}</td>
                                        <td>{{ $order->starting_time }}</td>
                                        <td>{{ $order->end_time }}</td>
                                        <td>{{ number_format($order->price) }} VND</td>
                                        <td>
                                            <a href="{{ route('order.edit', $order->id) }}" class="btn btn-success">sửa</a>
                                            <a href="{{ route('order.delete', $order->id) }}" class="btn btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                        <div style="float: right;">{{ $orders->links( "pagination::bootstrap-4") }}</div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
