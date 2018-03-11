@extends('layouts.master')

@section('content')
    @include('partials.components.parallax')
    <div class="container"></div>
    <section class="section-page">
        <div class="container">
            <div class="row">
                <div class="col-md-4 sidebar-top-small">
                    @include('faq::partials.sidebar')
                </div>
                <div class="col-md-8 content">
                    {!! Breadcrumbs::renderIfExists('faq.index') !!}

                    <div class="title" style="margin-bottom:5px;">
                        <h1 class="h-title"> {{ trans('themes::faq.title') }}</h1>
                    </div>

                    <div class="panel-group accordion" id="accordion" style="background-color:white; margin-top:0px;">
                        @foreach($faqs as $faq)
                            @include('faq::partials._faq')
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
