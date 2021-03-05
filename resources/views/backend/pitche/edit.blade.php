@extends('backend.master')
@section('title', 'Sửa sân bóng')
@section('content')

    <div id="page-wrapper">
        <div class="main-page">
            <h3 class="title1">Edit Pitche</h3>
            <form method="post" action="{{ route('pitche.update', $pitche->id) }}">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $pitche->name }}">
                    @if($errors->any())
                        <p class="alert-danger my-sm-4">{{ $errors->first('name') }}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label>Type Pitche</label>
                    <select name="type" class="form-control">
                        <option>Sân cũ {{ $pitche->type }}</option>
                        <option>Sân 5</option>
                        <option>Sân 7</option>
                        <option>Sân 11</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name="address" value="{{ $pitche->address }}">
                    @if($errors->any())
                        <p class="alert-danger my-sm-4">{{ $errors->first('address') }}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="text" class="form-control" name="image" value="{{ $pitche->image }}">
                    @if($errors->any())
                        <p class="alert-danger my-sm-4">{{ $errors->first('image') }}</p>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                {{--                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>--}}
            </form>
        </div>
    </div>

@endsection
