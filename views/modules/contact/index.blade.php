@extends('layouts.master')

@section('content')
    <div class="container"></div>
    <section class="parallax parallax-header" style="background-image: url('{{ Theme::url('img/demo-content/properties_parallax.jpg') }}')">
    </section>

    <div class="container"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 sidebar-top-small">
                @include('partials.pages.sidebars.contact')
            </div>
            <div class="col-md-8">

                {!! Breadcrumbs::renderIfExists('contact') !!}

                <section>
                    <div class="title" style="margin-bottom: 0;">
                        {{ trans('themes::contact.title') }}
                    </div>
                    <div class="map" style="margin: 0; padding: 0; height: 250px;">
                        @gmap('250px', '15', 'images/favicon.png', ['draggable'=>true, 'fullscreen'=>true, 'scrollzoom'=>true, 'zoomcontrol'=>true])
                    </div>
                    <br>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs type2">
                        <li class="active"><a href="#loc1" data-toggle="tab">{{ setting('theme::company-name') }}</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content type2">
                        <div class="tab-pane fade in active" id="loc1">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="info-icons">
                                        <div class="table-row">
                                            <div class="table-cell">
                                                <i class="fa fa-map-marker"></i>
                                            </div>
                                            <div class="table-cell text-right">
                                                {!! setting('theme::address') !!}
                                            </div>
                                        </div>
                                        <br>
                                        <div class="table-row">
                                            <div class="table-cell">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                            <div class="table-cell text-right">
                                                Telefon: {{ setting('theme::phone') }}<br>
                                            </div>
                                        </div>
                                        <div class="table-row">
                                            <div class="table-cell">
                                                <i class="fa fa-phone-square"></i>
                                            </div>
                                            <div class="table-cell text-right">
                                                Faks: {{ setting('theme::fax') }}<br>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="table-row">
                                            <div class="table-cell">
                                                <i class="fa fa-envelope"></i>
                                            </div>
                                            <div class="table-cell text-right">
                                                <a href="mailto:{!! Html::email(setting('theme::email')) !!}">{!! Html::email(setting('theme::email')) !!}</a><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <br>
                                            @include('partials.components.socials', ['class'=>'flat text-right'])
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    @include('contact::form')
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <br/>
@endsection


@push('js-inline')
{!! Captcha::script() !!}
<style>
    .help-block {
        font-size: 10px;
        color:red;
    }
</style>
@endpush