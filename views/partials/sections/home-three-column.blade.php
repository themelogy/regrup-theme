<div class="container" style="padding-top: 10px; margin-bottom:0px;">
    <div class="row">
        <div class="col-md-4">
            @findChildren('iskele-sistemleri', 'column')
        </div>
        <hr class="visible-xs visible-sm">
        <div class="col-md-4">
            @newsLatestPosts(5)
        </div>
        <hr class="visible-xs visible-sm">
        <div class="col-md-4">
            @latestProducts('iskele-ekipmanlari', 6)
        </div>
    </div>
</div>