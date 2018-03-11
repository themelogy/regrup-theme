<div class="row">
    <div class="footer-bottom">
        <div class="col-md-8">
            <nav class="navigation-footer">
                {!! Menu::render('footer', \Themes\Regrup\Presenter\FooterMenuPresenter::class) !!}
            </nav>
        </div>
        <div class="col-md-4 text-right">
            <small><a href="{{ url(locale()) }}">{{ setting('theme::company-name') }}</a> 2014 © Tüm hakları saklıdır.</small>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <small>REGRUP PRATİK İSKELE'NİN ÜRETİCİSİ VE TEK YETKİLİ BAYİSİDİR</small>
    </div>
</div>