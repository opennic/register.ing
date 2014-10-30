@extends('basic')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <h2 class="page-header">
            <i class="fa fa-globe"></i> register.ing
        </h2>
    </div><!-- /.col -->

    <div class="col-xs-12">
@if (Confide::user())
        <div class="callout callout-ok">
            <h4>Hey! You are logged in!</h4>
            <p><a href="{{ URL::to('domains') }}">You most likely want to be here, though!</a></p>
        </div>

        <div class="callout callout-danger">
            <h4>It looks like I am a brand new install!</h4>
            <p>Most likely you will want to go and edit the homepage. Don't forget to update the database to set up your first TLD!</p>
        </div>
@endif

@if (!Confide::user())
        <div class="callout callout-warning">
            <h4>You are not logged in!</h4>
            <p><a href="{{ URL::to('users/login') }}">Click here to log in!</a></p>
        </div>
@endif

    </div>

</div>
@stop
