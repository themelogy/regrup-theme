@if(isset($model))
    @if(count($model->tags)>0)
        @php
            $splitter = isset($splitter) ? $splitter : 3;
            $column   = isset($column) ? $column : 3;
            $split    = round(count($model->tags)/$splitter);
        @endphp
        <div class="row">
        @foreach($model->tags()->get()->chunk($split) as $tags)
            <div class="col-md-{{ 12/$column }}">
                <ul style="margin-top: 20px;">
                    @foreach($tags as $tag)
                        <li>
                            @if(isset($route) && $tag->slug)
                                <a href="{{ route($route, $tag->slug) }}">
                                    {{ ucfirst($tag->name) }}
                                </a>
                            @else
                                {{ $tag->name }}
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        @endforeach
        </div>
    @endif
@endif