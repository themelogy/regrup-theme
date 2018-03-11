<section class="container section-page">
    {!! Breadcrumbs::renderIfExists('page') !!}
    <div class="title" style="margin-bottom:5px;">
        <h1 class="h-title"> {{ $page->title }}</h1>
    </div>
    <div class="row">
        <div class="col-md-12 content">
            @if(@$page->settings->image_position == 'left')
            <div class="images">
               @include('partials.pages.flexslider-images')
            </div>
            @endif
            <div>
                {!! $page->body !!}
            </div>
            @if(@$page->settings->image_position == 'bottom')
               @include('partials.pages.images-bottom')
            @endif
        </div>
    </div>
    <div class="meta-tags" style="margin-bottom: 20px;">
        @include('partials.components.tags', ['model'=>$page, 'route'=>'page.tag', 'splitter'=>4, 'column'=>4])
    </div>
</section>