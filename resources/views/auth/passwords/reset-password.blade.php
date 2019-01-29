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
            <img src="{{ asset('images/forgot-password.svg') }}" width="100px">
    		<h2>Forgot Your Password?</h2>
    		<p class="pale font-16">Easy to setup another!</p>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="ui card fluid">
                        <form class="ui form" action="#" method="post">
                            {{ csrf_field() }}

                            <div class="field">
                                <label>Email Address</label>
                                <input type="text" name="email">
                              </div>
                              <button class="ui button login-button fluid" type="submit">Send Password Rest Link</button>
                        </form>
                    </div>
                </div>
            </div>
    	</div>
    </div>

    <div class="space-50"></div>
</div>

@endsection
