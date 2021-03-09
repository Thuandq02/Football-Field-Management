@extends('backend.master')
@section('title', 'Sửa sân bóng')
@section('content')

    <div id="page-wrapper">
        <div class="main-page">
            <h3 class="title1">Edit Pitche</h3>
            <form method="post" action="{{ route('pitche.update', $pitche->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $pitche->name }}">
                        @if($errors->any())
                            <p class="alert-danger my-sm-4">{{ $errors->first('name') }}</p>
                        @endif
                    </div>
                    <div class="form-group col-md-6">
                        <label>Type Pitche</label>
                        <select name="type" class="form-control">
                            <option>{{ $pitche->type }}</option>
                            <option>Sân 5</option>
                            <option>Sân 7</option>
                            <option>Sân 11</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label>Address</label>
                        <input type="text" class="form-control" name="address" value="{{ $pitche->address }}">
                        @if($errors->any())
                            <p class="alert-danger my-sm-4">{{ $errors->first('address') }}</p>
                        @endif
                    </div>
                    <div class="form-group col-md-12">
                        <label>Image</label>
                        <input type="file" class="form-control" name="image"
                               value="{{ asset('images/'.$pitche->image) }}">
                        <input type="hidden" name="imgName" class="form-control" value="{{ $pitche->image }}">
                        @if($errors->any())
                            <p class="alert-danger my-sm-4">{{ $errors->first('image') }}</p>
                        @endif
                        <img class="img-thumbnail img-fluid"
                             style="max-width: 250px !important; height: auto !important"
                             src="{{ asset('images/'.$pitche->image) }} " alt="">


                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </div>
            </form>
        </div>
    </div>

@endsection
