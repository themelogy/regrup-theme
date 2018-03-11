<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="content">
                <div class="title" style="margin: 0 0 10px 0;">
                    <h1 class="h-title">{{ isset($page->meta_title) ? $page->meta_title : $page->title }}</h1>
                </div>
                <div class="body">
                    {!! $page->body !!}
                </div>
            </div>
        </div>
    </div>
</div>