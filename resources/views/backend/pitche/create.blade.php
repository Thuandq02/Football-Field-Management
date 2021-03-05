@extends('backend.master')
@section('title', 'Thêm sân bóng')
@section('content')

    <div id="page-wrapper">
        <div class="main-page">
            <h3 class="title1">Creste Pitche</h3>
            <form method="post" action="{{ route('pitche.store') }}">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" >
                    @if($errors->any())
                        <p class="alert-danger my-sm-4">{{ $errors->first('name') }}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label>Type Pitche</label>
                    <select name="type" class="form-control">
                        <option>Sân 5</option>
                        <option>Sân 7</option>
                        <option>Sân 11</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name="address" >
                    @if($errors->any())
                        <p class="alert-danger my-sm-4">{{ $errors->first('address') }}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control" name="image" >
                    @if($errors->any())
                        <p class="alert-danger my-sm-4">{{ $errors->first('image') }}</p>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
                {{--                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>--}}
            </form>
        </div>
    </div>

@endsection
