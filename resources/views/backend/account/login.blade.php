@extends('backend.account.account')
@section('title', 'login')
@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <div style="height: 750px">
        <div class="main-page login-page ">
            <h3 class="title1">SignIn Page</h3>
            <div class="widget-shadow">

                <div class="login-body">
                    <form method="post" action="{{route('login.index')}}">
                        @csrf
                        <div>
                            <label>Email</label>
                            <input type="text" class="user" name="email" placeholder="Enter your email">
                        </div>
                        <div>
                            <label>Password</label>
                            <input type="password" name="password" class="lock" placeholder="password">
                        </div>
                        <input type="submit" name="Sign In" value="Sign In">
                        @if(\Illuminate\Support\Facades\Session::has('error'))
                            <div>
                                <p class="alert-danger">{{\Illuminate\Support\Facades\Session::get('error')}}</p>
                            </div>
                        @endif
                        <div class="forgot-grid">
                            <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Remember me</label>
                            <div class="forgot">
                                <a href="{{ route('register.index') }}">SignUp</a>
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
