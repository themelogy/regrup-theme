@if($images = $page->present()->images(1280,800,'fit',80))
    <div id="slider" class="flexslider property-slider with-thumbs">
        <ul class="slides">
            @foreach($images as $image)
                <li>
                    <div class="listing-image-slider">
                        <img src="{{ $image }}" alt="{{ $page->title }}" class="img-responsive">
                        <div class="image-links">
                            <div class="left">
                                <a class="inner" href="{{ $image }}" data-lightbox="related-30">
                                    <i class="fa fa-camera"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endif