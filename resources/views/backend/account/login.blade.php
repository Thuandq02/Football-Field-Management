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
                        <form>
                            <input type="text" class="user" name="email" placeholder="Enter your email" required="">
                            <input type="password" name="password" class="lock" placeholder="password">
                            <input type="submit" name="Sign In" value="Sign In">
                            <div class="forgot-grid">
                                <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Remember me</label>
                                <div class="forgot">
                                    <a href="#">forgot password?</a>
                                </div>
                                <div class="clearfix"> </div>
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
