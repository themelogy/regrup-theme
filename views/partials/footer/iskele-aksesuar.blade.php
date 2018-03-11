<div class="col-md-3 col-sm-6">
    <h4 class="uppercase">KİRALIK İSKELE SİSTEMLERİ</h4>
    {!! Menu::render('kiralik-iskele-sistemleri', \Themes\Regrup\Presenter\FooterMenuLinksPresenter::class) !!}

    <h4 class="uppercase">İSKELE AKSESUARI</h4>
    <ul>
    @foreach(app(\Modules\Store\Repositories\ProductRepository::class)->all()->where('status', 1) as $product)
        <li><a href="{{ $product->url }}">{{ $product->title }}</a></li>
    @endforeach
    </ul>
</div>