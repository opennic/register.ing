<?php $page_title = 'Request a password reset'; ?>
@extends('simple')

@section('content')

            <div class="header">{{{ $page_title }}}</div>
            <form action="{{ URL::to('/users/forgot_password') }}" method="post">
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
                        <label for="email">{{{ Lang::get('confide::confide.e_mail') }}}</label>
                        <div class="input-append input-group">
                            <input class="form-control" placeholder="{{{ Lang::get('confide::confide.e_mail') }}}" type="text" name="email" id="email" value="{{{ Input::old('email') }}}">
                            <span class="input-group-btn">
                                <input class="btn btn-default" type="submit" value="{{{ Lang::get('confide::confide.forgot.submit') }}}">
                            </span>
                        </div>
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

