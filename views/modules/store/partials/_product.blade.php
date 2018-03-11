<div class="col-md-3">
    <div class="thumbnail clean">
        <div class="listing-image pull-left col-md-12" style="padding: 15px;">
            <img src="{{ $product->present()->firstImage(null,200,'resize',80) }}" alt="{{ $product->title }}" />
            <div class="image-links">
                <div class="left">
                    <a class="inner" href="{{ $product->present()->firstImage(800,null,'resize',80) }}" data-lightbox="related-9">
                        <i class="fa fa-camera"></i>
                    </a>
                </div>
                <div class="right">
                    <a class="inner" href="{{ $product->url }}">
                        <i class="fa fa-link"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>