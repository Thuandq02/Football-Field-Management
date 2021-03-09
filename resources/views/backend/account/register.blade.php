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
                        </div>
                        <div>
                            <label>Email</label>
                            <input type="text" class="user" name="email" placeholder="Enter your email">
                        </div>
                        <div>
                            <label>Password</label>
                            <input type="password" class="lock" name="password" placeholder="password">
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
