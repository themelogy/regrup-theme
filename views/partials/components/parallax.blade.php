<div class="container"></div>
@if(isset($page))
@if($coverImage = $page->present()->coverImage(1920,50,'fit',80))
    <section class="parallax parallax-header parallax-small" style="background-image: url('{{ $coverImage }}')"> </section>
@else
    <section class="parallax parallax-header parallax-small" style="background-image: url('{{ Theme::url('img/metalbanner.jpg') }}')"> </section>
@endif
@else
    <section class="parallax parallax-header parallax-small" style="background-image: url('{{ Theme::url('img/metalbanner.jpg') }}')"> </section>
@endif
<div class="container"></div>