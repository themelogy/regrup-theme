<section class="container section-page">
    <div class="row">
        <div class="col-md-4 sidebar-top-small" style="margin-bottom: 40px;">
            <div class="sidebar">
                @includeIf('partials.components.calculate.'.$page->settings->sidebar_calculator)
            </div>
        </div>
        <div class="col-md-8 content">
            {!! Breadcrumbs::renderIfExists('page') !!}

            <div class="title" style="margin-bottom:5px;">
                <h1 class="h-title"> {{ $page->title }}</h1>
            </div>

            @if(@$page->settings->image_position == 'left')
                <div style="width: 300px; float:left; margin:0 20px 20px 0;">
                    @includeIf('partials.pages.flexslider-images')
                </div>
            @endif
            <div>
                {!! $page->body !!}
            </div>
            @if(@$page->settings->image_position == 'bottom')
                @includeIf('partials.pages.images-bottom')
            @endif

            @include('partials.components.tags', ['model'=>$page, 'route'=>'page.tag', 'splitter'=>3])
        </div>

    </div>
</section>