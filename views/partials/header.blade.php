<nav class="navbar navbar-brick navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" data-href="#" class="navbar-toggle toggle-sidebar pull-left" >
                        <i class="icon-house"></i>
                    </button>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand visible-sm visible-xs" href="{{ url(locale()) }}"><img src="{!! Theme::url('img/head-logo-smal.png') !!}" alt=""></a>
                    <a class="logo-small invisible hidden-xs hidden-sm" href="{{ url(locale()) }}"><img src="{!! Theme::url('img/head-logo-smal.png') !!}" alt=""></a>
                </div>
                <p class="navbar-text scroll-move visible-md visible-lg">BİZE ULAŞIN <strong>{{ setting('theme::phone') }}</strong></p>
                <div class="navbar-logo visible-md visible-lg">
                    <div class="logo" data-bg="{!! Theme::url('img/head-logo.png') !!}" data-height="150"><a href="{{ url(locale()) }}" style="position:absolute;display:block; width:315px; height:150px;top:150; text-indent:-9999px;">Güvenlikli Pratik Dış Cephe İskelesi</a></div>
                </div>
            </div>

            @include('partials.header.navigation')

        </div>
    </div><!-- /.container-fluid -->
</nav>


