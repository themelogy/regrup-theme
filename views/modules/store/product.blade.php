@extends('layouts.master')

@section('content')
    <div class="container"></div>

    <section class="parallax parallax-header parallax-small" style="background-image: url('{{ Theme::url('img/metalbanner.jpg') }}')"> </section>

    <div class="container"></div>

    <div class="container">

        {!! Breadcrumbs::renderIfExists('store.product') !!}

        <div class="title">
            {{ $product->title }}
        </div>

        <div class="description">

            <div class="thumbnail clean">
                <div class="listing-image pull-left" style="width: 300px; padding: 15px;">
                    <img src="{{ $product->present()->firstImage(300,null,'resize',80) }}" alt="{{ $product->title }}" />
                    <div class="image-links">
                        <div class="left">
                            <a class="inner" href="{{ $product->present()->firstImage(800,null,'resize',80) }}" data-lightbox="related-9">
                                <i class="fa fa-camera"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div style="padding-left: 350px;">
                {!! $product->description !!}
            </div>

        </div>

    </div>

    <br />

    <div class="container"></div>

@endsection