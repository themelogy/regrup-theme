<div class="container" style="margin-bottom:10px;">
    <div class="row" style="padding:0px;">
        <div class="col-md-6">
            {!! Widget::get('latest-faqs', ['pratik-iskele']) !!}
        </div>
        <div class="col-md-2">
            <div class="thumbnail boxed" style="margin-top: 0;">
                <a href="#sanal-katalog"><img src="{{ Theme::url('img/sanal_katalog.png') }}" alt="Sanal Katalog" /></a>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail boxed" style="margin-top: 0;">
                <a href="{{ url('/tr/iskele-hesabi') }}"><img src="{{ Theme::url('img/iskele_hesabi.png') }}" alt="İskele Hesabı" /></a>
            </div>
        </div>
        <div class="col-md-2">
            <div class="thumbnail boxed" style="margin-top: 0;">
                <a href="{{ url(locale().'/iskele-kurulum-videolari') }}"><img src="{{ Theme::url('img/kurulumvideolari.png') }}" alt="Kurulum Videoları" /></a>
            </div>
        </div>
    </div>
</div>