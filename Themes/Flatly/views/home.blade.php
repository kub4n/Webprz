@extends('layouts.master')

@section('title')
    {{ $page->title }} | @parent
@stop
@section('meta')
    <meta name="title" content="{{ $page->meta_title}}" />
    <meta name="description" content="{{ $page->meta_description }}" />
@stop

@section('content')
@include('homepage.main_banner')
@include('homepage.under_banner')
@include('homepage.info_blocks')
@include('homepage.gallery')
@include('homepage.contact')
@stop
