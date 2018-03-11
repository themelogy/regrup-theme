@if(isset($page))
<section>
    <div class="flexslider title-slider" data-animation="fade" data-loop="true">
        <div class="title">
            <h2 class="h-title">{{ $page->title }}</h2>
        </div>
        <ul class="slides">
            @foreach($children as $child)
            <li>
                <div class="row">
                    <div class="col-md-12">
                        <div class="thumbnail boxed" style="margin-top: 0;">
                            <div class="listing-image">
                                <img src="{{ $image = $child->present()->firstImage(360,150,'fit',80) }}" alt="{{ $child->title }}">
                                <div class="image-links">
                                    <div class="left">
                                        <a class="inner" href="{{ $image }}" data-lightbox="related-6">
                                            <i class="fa fa-camera"></i>
                                        </a>
                                    </div>
                                    <div class="right">
                                        <a class="inner" href="{{ $child->url }}">
                                            <i class="fa fa-link"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="description">
                                <h4 style="min-height:45px;">{{ $child->title }}</h4>
                                <span class="pull-right"><a href="{{ $child->url }}" class="btn btn-brick btn-xs large-padding" role="button">+ incele</a></span>
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
@endif