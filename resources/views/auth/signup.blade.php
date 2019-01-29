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
    		<h2>Hey, wanna have more fun?</h2>
    		<p class="pale font-16">Register to get started</p>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="ui card fluid">
                        <form class="ui form" action="#" method="post">
                            {{ csrf_field() }}

                            <div class="field">
                                <label>Student ID</label>
                                <input type="text" name="student_id">
                              </div>

                              <div class="field">
                                <label>Full Name</label>
                                <input type="text" name="name">
                              </div>

                              <div class="field">
                                <label>Email</label>
                                <input type="text" name="email">
                              </div>

                              <div class="field">
                                <label>Username</label>
                                <input type="text" name="username">
                              </div>

                              <div class="field">
                                <label>Password</label>
                                <input type="password" name="password">
                              </div>

                              <div class="field">
                                <label>Confirm Password</label>
                                <input type="password" name="password">
                              </div>

                              <button class="ui button login-button fluid" type="submit">Sign Up</button>
                        </form>
                    </div>

                    <p class="pale">
                    Already have an account? <a href="{{ url('signin') }}" class="pale">Sign In</a><br/>
                </p>
                </div>
            </div>
    	</div>
    </div>

    <div class="space-50"></div>
</div>

@endsection
