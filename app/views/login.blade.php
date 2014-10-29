<?php $page_title = 'Sign In'; ?>
@extends('simple')

@section('content')

            <div class="header">Sign In</div>
            <form action="{{{ URL::to('/users/login') }}}" method="post">
                <div class="body bg-gray">
                @if (Session::get('error'))
                    <div class="alert alert-error alert-danger">{{{ Session::get('error') }}}</div>
                @endif

                @if (Session::get('notice'))
                    <div class="callout callout-info">
                        <h4>{{ Session::get('notice') }}</h4>
                    </div>
                @endif

                <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
                <fieldset>
                    <div class="form-group">
                        <label for="email">{{{ Lang::get('confide::confide.username_e_mail') }}}</label>
                        <input class="form-control" tabindex="1" placeholder="{{{ Lang::get('confide::confide.username_e_mail') }}}" type="text" name="email" id="email" value="{{{ Input::old('email') }}}">
                    </div>
                    <div class="form-group">
                    <label for="password">
                        {{{ Lang::get('confide::confide.password') }}}
                    </label>
                    <input class="form-control" tabindex="2" placeholder="{{{ Lang::get('confide::confide.password') }}}" type="password" name="password" id="password">
                    <p class="help-block">
                    </p>
                    </div>
                    <div class="checkbox">
                        <label for="remember">
                            <input type="hidden" name="remember" value="0">
                            <input tabindex="4" type="checkbox" name="remember" id="remember" value="1"> {{{ Lang::get('confide::confide.login.remember') }}}
                        </label>
                    </div>
                    <div class="form-group">
                        <button tabindex="3" type="submit" class="btn btn-default">{{{ Lang::get('confide::confide.login.submit') }}}</button>
                    </div>
                </fieldset>

                </div>
                <div class="footer">
                    <button type="submit" class="btn bg-olive btn-block">Sign me in</button>

                    <p><a href="{{{ URL::to('/users/forgot_password') }}}">I forgot my password</a></p>

                    <a href="{{{ URL::to('/users/create') }}}" class="text-center">Register a new membership</a>
                </div>
            </div>
        </div>

@stop

