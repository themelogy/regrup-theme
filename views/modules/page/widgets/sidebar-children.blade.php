@if(isset($page))
<ul>
    @foreach($children as $child)
        <li><a href="{{ $child->url }}">{{ $child->title }}</a></li>
    @endforeach
</ul>
@endif