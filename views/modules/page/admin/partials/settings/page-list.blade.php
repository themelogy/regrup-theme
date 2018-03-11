<div class="row">
    <fieldset>
        <legend>Sayfa Listeleme Ayarları</legend>
        <div class="col-md-3">
            {!! Form::normalSelect("settings[list_page]", "Alt Sayfaları göster", $errors, [0=>'Hayır', 1=>'Evet'], isset($page->settings->list_page) ? $page->settings->list_page : 0) !!}
        </div>
        <div class="col-md-3">
            <div class="form-group" style="margin-right: 10px;">
                <label>
                    {!! Form::checkbox("settings[list_page_desc]", 1, old('settings.list_page_desc', isset($page->settings->list_page_desc) ? $page->settings->list_page_desc : 0), ['class'=>'flat-blue']) !!}
                    &nbsp; Alt Sayfa Yazı Göster
                </label>
            </div>
        </div>
        <div class="col-md-3">
            {!! Form::normalSelect("settings[list_per_page]", "Sayfalama", $errors, array(''=>'Seçiniz') + array_combine(range(1, 20, 1), range(1, 20, 1)), isset($page->settings->list_per_page) ? $page->settings->list_per_page : 6) !!}
        </div>
    </fieldset>
</div>
<div class="row">
    <fieldset>
        <legend>Gösterim Ayarları</legend>
        <div class="row">
            <div class="col-md-3 form-inline">
                <div class="form-group" style="margin-right: 10px;">
                    <label>
                        {!! Form::checkbox("settings[calculator]", 1, old('settings.calculator', isset($page->settings->calculator) ? $page->settings->calculator : 0), ['class'=>'flat-blue']) !!}
                        &nbsp; İskele Hesaplama Göster
                    </label>
                </div>
            </div>
            <div class="col-md-3">
                {!! Form::normalSelect("settings[sidebar_calculator]", "Hesaplama Bölümü", $errors, [0=>'Seçiniz', 'flansli-iskele'=>'Flanşlı İskele', 'h-tipi-iskele'=>'H Tipi İskele', 'pratik-iskele'=>'Pratik İskele'], isset($page->settings->sidebar_calculator) ? $page->settings->sidebar_calculator : 0) !!}
            </div>
        </div>
    </fieldset>
</div>
<br/>
<div class="row">
    <fieldset>
        <legend>Sayfa Ayarları</legend>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group{{ $errors->has("settings.password") ? ' has-error' : '' }}">
                    {!! Form::label("settings.title_bg_color", "Sayfa Şifrele".':') !!}
                    {!! Form::input('text', 'settings[password]', !isset($page->settings->password) ? '' : $page->settings->password, ['class'=>'form-control']) !!}
                    {!! $errors->first("settings.password", '<span class="help-block">:message</span>') !!}
                </div>
            </div>
        </div>
    </fieldset>
</div>