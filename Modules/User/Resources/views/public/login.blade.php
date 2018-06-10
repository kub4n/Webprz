@extends('layouts.master')

@section('title')
    {{ trans('user::auth.login') }} | @parent
@stop

@section('content')
    <section class="top">
        <div class="container">
            <p class="login-box-msg">Logowanie</p>
            @include('partials.notifications')

            {!! Form::open(['route' => 'login.post']) !!}
            <div class="modal-body">
                <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" class="form-control" autofocus
                           name="email" placeholder="{{ trans('user::auth.email') }}" value="{{ old('email')}}">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                </div>
                <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" class="form-control"
                           name="password" placeholder="{{ trans('user::auth.password') }}" value="{{ old('password')}}">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                </div>
                <a href="{{ route('reset')}}">Zapomniałem hasła</a><br>
                @if (config('asgard.user.config.allow_user_registration'))
                    <a href="{{ route('register')}}" class="text-center">Zarejestruj się</a>
                @endif
            </div>
            <div class="modal-footer">
                <button class="button-primary hvr-icon-wobble-horizontal" type="submit">Zaloguj się<i class="icon-play-button hvr-icon"></i>
            </div>
            </form>
        </div>
    </section>
@stop
