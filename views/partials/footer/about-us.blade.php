<div class="col-md-3 col-sm-6" style="padding-top:0px; margin-top:0px;">
    <p class="text-left">
        <img src="{{ Theme::url('img/footer-logo.png') }}" alt="{{ setting('theme::company-name') }}"/>
    </p>
    <p>{{ trans('themes::theme.footer.intro') }}</p><br/>
    <div>
        <img src="{{ Theme::url('img/tsepng.png') }}"/>
        <img src="{{ Theme::url('img/iso-9001.png') }}"/>
        <img src="{{ Theme::url('img/tuv.png') }}"/>
        <img src="{{ Theme::url('img/ce.png') }}"/>
    </div>
    @include('partials.footer.quick-links')
</div>