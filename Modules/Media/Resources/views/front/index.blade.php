@extends('layouts.master')

@section('content-header')
@stop

@push('css-stack')
@endpush

@section('content')
    <section class="info-blocks">
        <div class="container">
            @auth
                <files></files>
            @endauth

            @guest
                <h2>Brak dostępu</h2>
                    Dostęp do działu tylko po zalogowaniu
            @endguest
        </div>
    </section>
@stop