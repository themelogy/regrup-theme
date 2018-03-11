@extends('layouts.master')

@section('content')
    @include('partials.components.parallax')
    <div class="container"></div>
    @if(@$page->settings->calculator)
        @include('partials.pages.calculator-page')
    @elseif(@$page->settings->sidebar_calculator)
        @include('partials.pages.sidebar-calculator')
    @elseif(@$page->settings->list_page)
        @include('partials.pages.sub-pages')
    @else
        @include('partials.pages.default-page')
    @endif
@stop
