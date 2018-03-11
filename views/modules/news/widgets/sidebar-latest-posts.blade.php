@foreach($posts as $post)
    <div class="media">
        @if($image = $post->present()->firstImage(69,69,'fit',80))
            <img src="{{ $image }}" class="pull-left" alt="{{ $post->title }}">
        @endif
        <div class="media-body">
            <span style="font-size: 10px;" class="date">{{ $post->created_at->formatLocalized('%d %B %Y') }}</span>
            <h5 class="motive"><a href="{{ $post->url }}">{{ $post->title }}</a></h5>
        </div>
    </div>
@endforeach