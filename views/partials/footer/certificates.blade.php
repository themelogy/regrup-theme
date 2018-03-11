<section class="grey-section" style="padding-top: 10px; padding-bottom:10px; background-color:#ED5017; border-bottom: 1px solid #802B0D; border-top:none;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="partners flexslider" style="text-align:center;">
                    @if($certificates = Page::findBySlug('hakkimizda'))
                    <ul class="slides">
                        @foreach($certificates->present()->images(600,null,'resize',80) as $cert)
                        <li>
                            <a id="{{ $certificates->slug }}" class="inner" href="{{ $cert }}" data-lightbox="{{ $certificates->slug }}"><img src="{{ Theme::url('img/certificates/'.$loop->iteration.'.png') }}" alt="{{ $certificates->title }}" /></a>
                        </li>
                        @endforeach
                    </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>