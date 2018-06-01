@extends('layouts.master')

@section('title')
    {{ $page->title }} | @parent
@stop
@section('meta')
    <meta name="title" content="{{ $page->meta_title}}"/>
    <meta name="description" content="{{ $page->meta_description }}"/>
@stop

@section('content')
    <section class="default-page">
        <div class="container">
            <h1>{{ $page->title }}</h1>
            {!! $page->body !!}
        </div>
    </section>
@stop
