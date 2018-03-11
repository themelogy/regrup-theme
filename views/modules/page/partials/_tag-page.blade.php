
    <section>
        <div class="row">
            <div class="col-md-12">
                <div class="title" style="margin-bottom: 10px;">
                    <h1 class="h-title">{{ trans('theme::tags.tag',['tag'=>$tag->name]) }}</h1>
                </div>
            </div>
        </div>
        <div class="row">
            @if(count($page)>0)
            @foreach($pages as $page)
            <div class="col-md-12">
                <div class="flexslider title-slider" data-animation="fade" data-loop="true">
                    <div class="title">
                        <h2 class="h-title">{{ $page->title }}</h2>
                    </div>
                    <ul class="slides">
                        <li>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="thumbnail boxed" style="margin-top: 0;">
                                        <div class="description" style="margin-bottom: 0;">
                                            @if($image = $page->present()->firstImage(150,150,'fit',80))
                                            <span class="pull-left" style="margin-right: 20px;"><img src="{{ $image }}" alt="{{ $page->title }}" class="img-thumbnail" /></span>
                                            @endif
                                            {!! Str::words($page->body, 50) !!}<br/><br/>
                                            <a href="{{ $page->url }}" class="btn btn-brick btn-xs large-padding" role="button">+ incele</a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
            @endforeach
            @endif
        </div>

    </section>
