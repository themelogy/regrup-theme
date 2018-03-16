<div class="col-md-3 col-sm-6" style="padding-top:0px; margin-top:0px;">
    <p class="text-left">
        <img src="{{ Theme::url('img/footer-logo.png') }}" alt="{{ setting('theme::company-name') }}"/>
    </p>
    <p>{{ trans('themes::theme.footer.intro') }}</p><br/>
    <div>
        {!! Html::image(Theme::url('img/tsepng.png'), 'TSE Belgesi') !!}
        {!! Html::image(Theme::url('img/iso-9001.png'), 'ISO 9001 Belgesi') !!}
        {!! Html::image(Theme::url('img/tuv.png'), 'TUV Belgesi') !!}
        {!! Html::image(Theme::url('img/ce.png'), 'CE Belgesi') !!}
    </div>
    @include('partials.footer.quick-links')
</div>