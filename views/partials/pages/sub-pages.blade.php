@php
    $children = $page->children()->orderBy('position')->get();
@endphp
@if(count($children)>0)
    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title" style="margin-bottom: 10px;">
                    <h1 class="h-title">{{ $page->title }}</h1>
                </div>
                @if(@$page->settings->list_page_desc)
                    <div class="content">
                        {!! $page->body !!}
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            @foreach($children as $child)
                <div class="col-md-12">
                    <div class="title" style="margin: 0">
                        <h2 class="h-title">{{ $child->title }}</h2>
                    </div>
                    <div class="thumbnail boxed" style="margin-top: 0; padding: 20px;">
                        <div class="row">
                            <div class="col-md-2">
                                @if($image = $child->present()->firstImage(150,150,'fit',80))
                                    <span class="pull-left" style="margin-right: 20px;"><img src="{{ $image }}"
                                                                                             alt="{{ $child->title }}"
                                                                                             class="img-thumbnail"/></span>
                                @endif
                            </div>
                            <div class="col-md-10">
                                {!! Str::words($child->body, 50) !!}<br/><br/>
                                <a href="{{ $child->url }}" class="btn btn-brick btn-xs large-padding"
                                   role="button">+ incele</a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </section>
@endif