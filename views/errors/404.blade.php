@extends('layouts.master')

@php
    $title = '404 '.trans('page::messages.page not found');
    seo_helper()->setTitle($title);
@endphp

@section('content')
    @include('partials.components.parallax')
    <div class="container"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p style="font-size: 10rem; line-height: 10rem;">
                    404
                </p>
                <h1 class="title h-line">{{ trans('page::messages.page not found') }}!</h1>
                <p>
                    <a href="{{ route('homepage') }}" class="btn">{{ trans('page::messages.return homepage') }}</a>
                </p>
            </div>
        </div>
    </div>
@stop
