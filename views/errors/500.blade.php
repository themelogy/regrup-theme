@extends('layouts.master')

@php
    $title = '500 Sistem Hatası';
    seo_helper()->setTitle($title);
@endphp

@section('content')
    @include('partials.components.parallax')
    <div class="container"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p style="font-size: 10rem; line-height: 10rem;">
                    500
                </p>
                <h1 class="title h-line">Sistem Hatası!</h1>
                <h3 class="thin">
                    <span class="highlight2">Hatayla ilgili site yöneticisine bilgi verebilirsiniz</span>
                </h3>
                <p>
                    <a href="{{ route('homepage') }}" class="btn">{{ trans('page::messages.return homepage') }}</a>
                </p>
            </div>
        </div>
    </div>
@stop
