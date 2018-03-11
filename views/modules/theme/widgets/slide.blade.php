@if(count($slides)>0)
<section class="flexslider std-slider" data-height="400" data-direction="horizontal" data-animation="fade" data-loop="true" data-smooth="false" data-slideshow="true" data-speed="25000" data-animspeed="500" data-controls="false" data-dircontrols="true" style="margin: 0;">
    <ul class="slides">
        @foreach($slides as $slide)
        <li data-bg="{{ $slide->present()->firstImage(1920,600,'fit',70) }}">
            <div class="inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-6 col-md-4 col-md-offset-4">
                            <div class="object animated big" data-top="{!! isset($slide->settings->title_position_y) ? $slide->settings->title_position_y.'px' : '0' !!}" data-fx="fadeInUp">{{ $slide->sub_title }} <br />
                                @if($slide->link_type != 'none')
                                <a target="{{ $slide->link->target }}" href="{{ $slide->link->url }}" class="btn btn-brick btn-xs large-padding">{{ $slide->link->title }}</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
</section>
@endif