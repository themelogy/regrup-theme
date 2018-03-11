@extends('layouts.master')

@section('content')
    @themeSlide('anasayfa')
    <div class="intro-page">
        @findPage('anasayfa')
    </div>
    @include('partials.sections.home-three-column')
    @include('partials.sections.home-four-column')
@stop