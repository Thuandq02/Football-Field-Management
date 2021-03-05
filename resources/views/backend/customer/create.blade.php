@extends('backend.master')
@section('title', 'Thêm khách hàng')
@section('content')

    <div id="page-wrapper">
        <div class="main-page">
            <h3 class="title1">Creste Customer</h3>
            <form method="post" action="{{ route('customer.store') }}">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" >
                    @if($errors->any())
                        <p class="alert-danger my-sm-4">{{ $errors->first('name') }}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="number" class="form-control" name="phone" >
                    @if($errors->any())
                        <p class="alert-danger my-sm-4">{{ $errors->first('phone') }}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name="address" >
                    @if($errors->any())
                        <p class="alert-danger my-sm-4">{{ $errors->first('address') }}</p>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
{{--                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>--}}
            </form>
        </div>
    </div>

@endsection
