@extends('layouts.header-footer')

@section('content')
<style type="text/css">
    body{
        background-color: #F6FAFB;
    }
    .form-align{
        text-align: center;
    }
    .form{
        text-align: left;
    }
    .card{
        padding:10% !important;
    }
    a:hover{
        text-decoration: underline;
    }
</style>

<div class="space-5"></div>
<div class="ssection">
    
    <div class="space-50"></div>

    <div class="row">
    	<div class="col-sm-12 col-md-4 offset-md-4 col-lg-4 offset-lg-4 form-align">
            <img src="{{ asset('images/login_smiley.svg') }}" width="100px">
    		<h2>Hey, good to see you!</h2>
    		<p class="pale font-16">Login to get going</p>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="ui card fluid">
                        <form class="ui form" action="#" method="post">
                            {{ csrf_field() }}

                            <div class="field">
                                <label>Email or Username</label>
                                <input type="text" name="email_or_username">
                              </div>
                              <div class="field">
                                <label>Password</label>
                                <input type="password" name="password">
                              </div>
                              <button class="ui button login-button fluid" type="submit">Sign In</button>
                        </form>
                    </div>

                    <p class="pale">
                    Don’t have an account yet? <a href="{{ url('signup') }}" class="pale">Sign Up</a><br/>
                    <a href="{{ url('reset-password') }}" class="pale">Forgot your password?</a>
                </p>
                </div>
            </div>
    	</div>
    </div>

    <div class="space-50"></div>
</div>

@endsection
