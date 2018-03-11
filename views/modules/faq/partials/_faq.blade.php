<div class="panel">
    <div class="panel-heading">
        <a @if(!$loop->first) class="collapsed" @endif data-toggle="collapse" data-parent="#accordion" href="#{{ $faq->slug }}">{{ $faq->title }}</a>
    </div>
    <div id="{{ $faq->slug }}" class="panel-collapse collapse {{ $loop->first ? 'in' : '' }}">
        <div class="panel-body" style="text-align:justify;">
            {!! strip_tags($faq->content) !!}<br/><br/>
        </div>
    </div>
</div>