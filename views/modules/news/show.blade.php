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

                    {!! Breadcrumbs::renderIfExists('news.show') !!}

                    <div class="title" style="margin-bottom:5px;">
                        <h1 class="h-title">{{ $post->title }}</h1>
                    </div>

                    <div class="posts">
                            <article class="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="post-info" style="border:none;">
                                            <p><span>@if(isset($post->category))<a href="{{ $post->category->url }}">{{ $post->category->name }}</a> @endif
                                                    <strong>{{ $post->created_at->formatLocalized('%d %B %Y') }}</strong></span>
                                            </p>
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
                                            {!! $post->content !!}
                                        </div>
                                    </div>
                                </div>
                            </article>

                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection