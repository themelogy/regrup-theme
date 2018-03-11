<section style="padding-bottom: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {!! Breadcrumbs::renderIfExists('page') !!}
            </div>
        </div>
        <div class="row">
            @if(@$page->settings->calculator && @$page->settings->sidebar_calculator)
            <div class="col-md-12">
                @includeIf('partials.components.calculate.'.$page->settings->sidebar_calculator, ['tag'=>'h1'])
            </div>
            @else
            <div class="col-md-4">
                @include('partials.components.calculate.pratik-iskele')
            </div>
            <div class="col-md-4">
                @include('partials.components.calculate.flansli-iskele')
            </div>
            <div class="col-md-4">
                @include('partials.components.calculate.h-tipi-iskele')
            </div>
            @endif
        </div>
    </div>

</section>