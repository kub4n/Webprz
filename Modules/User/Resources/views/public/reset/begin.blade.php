@extends('layouts.master')

@section('title')
    {{ trans('user::auth.reset password') }} | @parent
@stop

@section('content')
    <section class="top">
        <div class="container">
            <h1>{{ setting('core::site-name') }}</h1>
            <p class="login-box-msg">Zresetuj hasło</p>

            <div class="login-logo">
                @include('partials.notifications')

                {!! Form::open(['route' => 'reset.post']) !!}
                <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" class="form-control" autofocus
                           name="email" placeholder="{{ trans('user::auth.email') }}" value="{{ old('email')}}">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                </div>

                    <button type="submit" class="w-25 btn btn-primary btn-block btn-flat">
                        Przypomnij
                    </button>
                {!! Form::close() !!} <bR>
                <p>
                    <a href="{{ route('login') }}" class="text-center">Wróć do logowania</a>
                </p>

            </div>
        </div>
    </section>
@stop
