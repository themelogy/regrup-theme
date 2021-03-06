@extends('layouts.master')

@section('content')
    <div class="container"></div>

    <section class="parallax parallax-header parallax-small" style="background-image: url('{{ Theme::url('img/metalbanner.jpg') }}')"> </section>

    <div class="container"></div>

    <div class="container">

        {!! Breadcrumbs::renderIfExists('store.category') !!}

        <section>

            <div class="title" style="margin-bottom: 0;">
                {{ trans('themes::product.title') }}
            </div>

            <div class="row">
                @foreach($products as $product)
                    @include('store::partials._product')
                @endforeach
            </div>

            <div class="row">
                <div class="col-md-12">
                    @if($products)
                        @if(view()->exists('store.pagination.default'))
                            {!! $products->render('store.pagination.default') !!}
                        @else
                            {!! $products->render('store::pagination.default') !!}
                        @endif
                    @endif
                </div>
            </div>
        </section>
    </div>

    <br/>

    <div class="container"></div>

@endsection