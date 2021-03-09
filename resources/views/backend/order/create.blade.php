@extends('backend.master')
@section('title', 'Thêm đơn hàng')
@section('content')

    <div id="page-wrapper">
        <div class="main-page">
            <h3 class="title1">Creste Order</h3>
            <form method="post" action="{{ route('order.store') }}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Customer</label>
                        <select name="customer_id" class="form-control">
                            @foreach($customers as $cu)
                                <option value="{{ $cu->id }}">{{ $cu->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Name Pitch</label>
                        <select name="pitche_id" class="form-control">
                            @foreach($pitches as $pi)
                                <option value="{{ $pi->id }}">{{ $pi->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Starting Time</label>
                        <input type="datetime-local" class="form-control" name="starting_time">
                        @if($errors->any())
                            <p class="alert-danger my-sm-4">{{ $errors->first('starting_time') }}</p>
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label>End Time</label>
                        <input type="datetime-local" class="form-control" name="end_time">
                        @if($errors->any())
                            <p class="alert-danger my-sm-4">{{ $errors->first('end_time') }}</p>
                        @endif
                    </div>
                    <div class="form-group col-md-12">
                        <label>Price</label>
                        <input type="number" class="form-control" name="price">
                        @if($errors->any())
                            <p class="alert-danger my-sm-4">{{ $errors->first('price') }}</p>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                    {{--                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>--}}
                </div>
            </form>
        </div>
    </div>

@endsection
