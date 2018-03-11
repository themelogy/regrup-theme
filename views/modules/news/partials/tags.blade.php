@if(isset($post->tags))
@if(count($post->tags))
    <h4 class="uppercase motive section-top">ETİKETLER</h4>
    <div class="tagcloud">
        @foreach($post->tags as $tag)
            <a href="{{ route('news.tag', $tag->slug) }}">
                {{ $tag->name }}
            </a>
        @endforeach
    </div>
@endif
@else
    <h4 class="uppercase motive section-top">ETİKETLER</h4>
    <div class="tagcloud">
        @foreach(News::latest(5) as $latestBlog)
            @if(isset($latestBlog->tags))
            @php $tag = array_first($latestBlog->tags) @endphp
            <a href="{{ route('news.tag', $tag->slug) }}">
                {{ $tag->name }}
            </a>
            @endif
        @endforeach
    </div>
@endif