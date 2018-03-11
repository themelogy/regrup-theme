<ul class="socials {{ $class ?? null }}">
    @foreach(['facebook'=>'facebook', 'twitter'=>'twitter', 'youtube'=>'youtube', 'linkedin'=>'linkedin', 'instagram'=>'instagram', 'google-plus'=>'google'] as $skey => $social)
        @if(setting('theme::'.$social))
            <li>
                <a href="{{ setting('theme::'.$social) }}" target="_blank" data-toggle="tooltip"
                   data-placement="bottom" title="{{ ucfirst($social) }}"><i class="fa fa-{{ $skey }}"></i></a>
            </li>
        @endif
    @endforeach
</ul>