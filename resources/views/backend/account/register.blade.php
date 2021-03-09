@extends('backend.account.account')
@section('title', 'register')
@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <div style="height: 750px">
        <div class="main-page login-page ">
            <h3 class="title1">SignUp Here</h3>
            <p class="creating">Having hands on experience in creating innovative designs,I do offer design
                solutions which harness.</p>
            <div class="widget-shadow">

                <div class="login-body">
                    <form method="post" action="{{ route('register.index' )}}">
                        @csrf
                        <div>
                            <label>Name</label>
                            <input type="text" class="user" name="name" placeholder="Enter your name">
                            @if($errors->any())
                                <p class="alert-danger my-sm-4">{{ $errors->first('name') }}</p>
                            @endif
                        </div>
                        <div>
                            <label>Email</label>
                            <input type="text" class="user" name="email" placeholder="Enter your email">
                            @if($errors->any())
                                <p class="alert-danger my-sm-4">{{ $errors->first('email') }}</p>
                            @endif
                        </div>
                        <div>
                            <label>Password</label>
                            <input type="password" class="lock" name="password" placeholder="password">
                            @if($errors->any())
                                <p class="alert-danger my-sm-4">{{ $errors->first('password') }}</p>
                            @endif
                        </div>
                        <div align="center">
                            <input type="submit" value="SignUp">
                            <div class="clearfix"></div>
                        </div>
                        <div class="forgot-grid">
                            <div>
                                <a href="{{ route('login.index') }}">SignIn</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="login-page-bottom">
                <h5></h5>
            </div>
        </div>
    </div>

@endsection
