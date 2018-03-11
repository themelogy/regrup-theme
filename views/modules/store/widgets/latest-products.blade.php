<section>
    <div class="flexslider title-slider" data-animation="fade" data-loop="true">
        <div class="title">
            <h3 class="h-title">{{ $category->title }}</h3>
        </div>
        <ul class="slides">
            @foreach($products as $product)
            <li>
                <div class="row">
                    <div class="col-md-12">
                        <div class="thumbnail boxed" style="margin-top: 0;">
                            <div class="listing-image">
                                <img src="{{ $product->present()->firstImage(360,150,'fit',80) }}" alt="{{ $product->title }}">
                                <div class="image-links">
                                    <div class="left">
                                        <a class="inner" href="{{ $product->present()->firstImage(500,null,'resize',80) }}" data-lightbox="related-6">
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
                            <div class="description">
                                <h4 style="min-height:45px;">{{ $product->title }}</h4>
                                <span class="pull-right"><a href="{{ $product->url }}" class="btn btn-brick btn-xs large-padding" role="button">+ incele</a></span>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</section>