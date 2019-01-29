@extends('layouts.header-footer')

@section('content')
<div class="space-5"></div>
<div class="section">
    
    <div class="space-50"></div>

    <div class="row">
    	<div class="col-sm-12 col-md-8 offset-md-2 col-lg-8 offset-lg-2">
    		<h1 class="center">Clubs &amp; Societies</h1>
    		<p class="pale font-18 center">Here’s a listing of all the clubs and societies currently available at Lancaster University, Ghana</p>

    		<div class="space-40"></div>

    		<div class="row">
    			<div class="col-sm-12 col-md-8 offset-md2 col-lg-8 offset-lg-2">
    				<div class="row">
    					<div class="col-sm-12 col-md-4 col-lg-4">
    						<a href="{{ url('about-club') }}"><div class="top-subimage" style="background-image: url('images/clubs.gif');"></div></a>
    						<h4><a href="{{ url('about-club') }}">Media Club</a></h4>
    						<div class="space-10"></div>
    					</div>
    					<div class="col-sm-12 col-md-4 col-lg-4">
    						<a href="{{ url('about-club') }}"><div class="top-subimage" style="background-image: url('images/clubs.gif');"></div></a>
    						<h4><a href="{{ url('about-club') }}">Computer Science Society</a></h4>
    						<div class="space-10"></div>
    					</div>
    					<div class="col-sm-12 col-md-4 col-lg-4">
    						<a href="{{ url('about-club') }}"><div class="top-subimage" style="background-image: url('images/clubs.gif');"></div></a>
    						<h4><a href="{{ url('about-club') }}">Law Society</a></h4>
    						<div class="space-10"></div>
    					</div>
    					<div class="col-sm-12 col-md-4 col-lg-4">
    						<a href="{{ url('about-club') }}"><div class="top-subimage" style="background-image: url('images/clubs.gif');"></div></a>
    						<h4><a href="{{ url('about-club') }}">Politics Society</a></h4>
    						<div class="space-10"></div>
    					</div>
    					<div class="col-sm-12 col-md-4 col-lg-4">
    						<a href="{{ url('about-club') }}"><div class="top-subimage" style="background-image: url('images/clubs.gif');"></div></a>
    						<h4><a href="{{ url('about-club') }}">Music Club</a></h4>
    						<div class="space-10"></div>
    					</div>
    					<div class="col-sm-12 col-md-4 col-lg-4">
    						<a href="{{ url('about-club') }}"><div class="top-subimage" style="background-image: url('images/clubs.gif');"></div></a>
    						<h4><a href="{{ url('about-club') }}">Hope Society</a></h4>
    						<div class="space-10"></div>
    					</div>
    					<div class="col-sm-12 col-md-4 col-lg-4">
    						<a href="{{ url('about-club') }}"><div class="top-subimage" style="background-image: url('images/clubs.gif');"></div></a>
    						<h4><a href="{{ url('about-club') }}">Business Society</a></h4>
    						<div class="space-10"></div>
    					</div>
    					<div class="col-sm-12 col-md-4 col-lg-4">
    						<a href="{{ url('about-club') }}"><div class="top-subimage" style="background-image: url('images/clubs.gif');"></div></a>
    						<h4><a href="{{ url('about-club') }}">Computer Science Society</a></h4>
    						<div class="space-10"></div>
    					</div>
    					<div class="col-sm-12 col-md-4 col-lg-4">
    						<div class="top-subimage" style="background-image: url('images/clubs.gif');"></div>
    						<h4><a href="{{ url('about-club') }}">Computer Science Society</a></h4>
    						<div class="space-10"></div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>

    <div class="space-50"></div>
</div>

@endsection
