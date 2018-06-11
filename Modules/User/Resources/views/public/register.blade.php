@extends('layouts.master')

@section('content')
    <section class="info-blocks">
        <div class="container">
                <h1>Rejestracja</h1>

            <div class="register-box-body">
                <p class="login-box-msg">Rejestracja nowego użytkownika</p>
                @include('partials.notifications')
                {!! Form::open(['route' => 'register.post']) !!}
                <div class="form-group has-feedback {{ $errors->has('first_name') ? ' has-error has-feedback' : '' }}">
                    <input type="text" name="first_name" class="form-control"
                           placeholder="Imie">
                    {!! $errors->first('first_name', '<span class="help-block">:message</span>') !!}
                </div>
                <div class="form-group has-feedback {{ $errors->has('last_name') ? ' has-error has-feedback' : '' }}">
                    <input type="text" name="last_name" class="form-control"
                           placeholder="Nazwisko">
                    {!! $errors->first('last_name', '<span class="help-block">:message</span>') !!}
                </div>
                <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error has-feedback' : '' }}">
                    <input type="email" name="email" class="form-control" autofocus
                           placeholder="{{ trans('user::auth.email') }}" value="{{ old('email') }}">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                </div>
                <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error has-feedback' : '' }}">
                    <input type="password" name="password" class="form-control"
                           placeholder="{{ trans('user::auth.password') }}">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                </div>

                <div class="form-group has-feedback {{ $errors->has('password_confirmation') ? ' has-error has-feedback' : '' }}">
                    <input type="password" name="password_confirmation" class="form-control"
                           placeholder="{{ trans('user::auth.password confirmation') }}">
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                    {!! $errors->first('password_confirmation', '<span class="help-block">:message</span>') !!}
                </div>
                        <button type="submit" class="w-25 btn btn-primary btn-block btn-flat">Zarejestruj</button>
                {!! Form::close() !!}
            </div>
        </div>
    </section>
@stop
