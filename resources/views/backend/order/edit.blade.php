@extends('backend.master')
@section('title', 'Sửa đơn hàng')
@section('content')

    <div id="page-wrapper">
        <div class="main-page">
            <h3 class="title1">Edit Order</h3>
            <form method="post" action="{{ route('order.update', $order->id) }}">
                @csrf
                <div class="form-group">
                    <label>Customer</label>
                    <select name="customer_id" class="form-control">
                        @foreach($customers as $cu)
                            <option value="{{ $cu->id }}">{{ $cu->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Name Pitch</label>
                    <select name="pitche_id" class="form-control">
                        @foreach($pitches as $pi)
                            <option value="{{ $pi->id }}">{{ $pi->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Starting Time</label>
                    <input type="datetime-local" class="form-control" name="starting_time" value="{{ $order->starting_time }}">
                    @if($errors->any())
                        <p class="alert-danger my-sm-4">{{ $errors->first('starting_time') }}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label>End Time</label>
                    <input type="datetime-local" class="form-control" name="end_time" value="{{ $order->end_time }}">
                    @if($errors->any())
                        <p class="alert-danger my-sm-4">{{ $errors->first('end_time') }}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="number" class="form-control" name="price" value="{{ $order->price }}">
                    @if($errors->any())
                        <p class="alert-danger my-sm-4">{{ $errors->first('price') }}</p>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>

@endsection
