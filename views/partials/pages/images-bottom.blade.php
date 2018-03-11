@if($images = $page->present()->images(null,800,'resize',80))
<div class="images-bottom">
    <div class="row">
        @foreach($images as $image)
            <div class="col-md-2">
                <div class="thumbnail clean">
                    <div class="listing-image pull-left col-md-12">
                        <img src="{{ $image }}" alt="{{ $page->title }}" />
                        <div class="image-links">
                            <div class="left">
                                <a class="inner" href="{{ $image }}" data-lightbox="related-9">
                                    <i class="fa fa-camera"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endif