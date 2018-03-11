@extends('layouts.master')

@section('content')
    @include('partials.components.parallax')
    <section class="section-page">
        <div class="container">
            <div class="row">
                <div class="col-md-4 sidebar-top-small">
                    @include('news::partials.sidebar')
                </div>
                <div class="col-md-8 content">

                    {!! Breadcrumbs::renderIfExists('news') !!}

                    <div class="title" style="margin-bottom:5px;">
                        <h1 class="h-title"> {{ trans('themes::news.title') }}</h1>
                    </div>

                    <div class="posts">
                        @foreach($posts as $post)
                            <article class="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="title">
                                            <h2 class="h-title"><a href="{{ $post->url }}">{{ $post->title }}</a></h2>
                                        </div>
                                        <div class="post-info">
                                            <p><span>@if(isset($post->category))<a href="{{ $post->category->url }}">{{ $post->category->name }}</a> @endif
                                                    <strong>{{ $post->created_at->formatLocalized('%d %B %Y') }}</strong></span>
                                            </p>
                                            <hr>
                                        </div>
                                        <div class="description">
                                            @if($image = $post->present()->firstImage(200,125,'fit',80))
                                                <div class="listing-image pull-left">
                                                    <img src="{{ $image }}" alt="{{ $post->title }}"/>
                                                    <div class="image-links">
                                                        <div class="left">
                                                            <a class="inner" href="{{ $image }}"
                                                               data-lightbox="related-9">
                                                                <i class="fa fa-camera"></i>
                                                            </a>
                                                        </div>
                                                        <div class="right">
                                                            <a class="inner" href="{{ $post->url }}">
                                                                <i class="fa fa-link"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="caption">
                                                {{ $post->intro }} <br/><br/>
                                                <a href="{{ $post->url }}" class="btn btn-xs btn-brick large-padding pull-right">devamı...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach

                        {!! $posts->render() !!}
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection