@extends('layouts.header-footer')

@section('content')
<div class="section">
    <div class="event-banner">
        <div style="height: 100%;">
            <div class="center-text">
                <div class="row">
                    <div class="col-sm-12 col-md-10 offset-md-1 col-lg-10 offset-lg-1">
                        <h1>Event Info</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="space-30"></div>

    <!--START EVENT DETAILS BANNER -->
    <div class="container">
        <img class="img-responsive" src='/images/studentblogeventbanner.png'>   
    </div>
    <!--END EVENT DETAILS BANNER -->

    <!--START EVENT DETAILS HEADING -->
    <div class="container">
        <div class="row">
            <div class="col-sm-1">
        <!--left empty to form the side margins-->
            </div>
            <div class="col-sm-10">
                <h1 class="event-banner-heading">Extra Info</h1>
                <div class="ui divider"></div>
            </div>
            <div class="col-sm-1">
        <!--left empty to form the side margins-->
            </div>
        </div>
    </div>
    <!--END EVENT DETAILS HEADING -->

    <!--START EVENT DETAILS CONTENT -->
    <div class="container">
        <div class="row">
            <div class="col-sm-1">
        <!--left empty to form the side margins-->
            </div>
            <div class="col-sm-10 banner-details">
                <p>This is where the contents will be for all events.</p>

                <p>The club details goes here following a WYSIWYG Format. The club details goes here following a WYSIWYG Format. The club details goes here following a WYSIWYG Format. The club details goes here following a WYSIWYG Format.The club details goes here following a WYSIWYG Format. The club details goes here following a WYSIWYG Format. The club details goes here following a WYSIWYG Format. The club details goes here following a WYSIWYG Format.</p>
            </div>
            <div class="ui divider"></div>
            <div class="col-sm-1">
        <!--left empty to form the side margins-->
            </div>
        </div>
    </div>
    <!--END EVENT DETAILS CONTENT -->

    

    <div class="space-50"></div>
</div>



@endsection
