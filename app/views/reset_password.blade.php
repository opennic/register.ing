<?php $page_title = 'Reset new password'; ?>
@extends('simple')

@section('content')

            <div class="header">{{{ $page_title }}}</div>
            <form action="{{ URL::to('/users/reset_password') }}" method="post">
                <div class="body bg-gray">
                @if (Session::get('error'))
                    <div class="alert alert-error alert-danger">{{{ Session::get('error') }}}</div>
                @endif

                @if (Session::get('notice'))
                    <div class="callout callout-info">
                        <h4>{{ Session::get('notice') }}</h4>
                    </div>
                @endif

                <input type="hidden" name="token" value="{{{ $token }}}">
                <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">

                <fieldset>
                    <div class="form-group">
                        <label for="password">{{{ Lang::get('confide::confide.password') }}}</label>
                        <input class="form-control" placeholder="{{{ Lang::get('confide::confide.password') }}}" type="password" name="password" id="password">
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">{{{ Lang::get('confide::confide.password_confirmation') }}}</label>
                        <input class="form-control" placeholder="{{{ Lang::get('confide::confide.password_confirmation') }}}" type="password" name="password_confirmation" id="password_confirmation">
                    </div>
                </fieldset>

                <div class="form-actions form-group">
                    <button type="submit" class="btn bg-olive btn-block">{{{ Lang::get('confide::confide.forgot.submit') }}}</button>
                </div>

                </form>

                </div>
                <div class="footer">
                    <p><a href="{{{ URL::to('/users/login') }}}">I know my password</a></p>

                    <a href="{{{ URL::to('/users/create') }}}" class="text-center">Create a new account</a>
                </div>
            </div>
        </div>

@stop

