<!-- SCRIPTS -->
@stack('css-stack')
{!! Asset::css() !!}
{!! Asset::js('f-head') !!}
{!! Theme::script("js/bootstrap/js/bootstrap.min.js") !!}
{!! Theme::script("js/modernizr.custom.js") !!}
{!! Theme::script("js/jquery-ui.js") !!}
{!! Theme::style("vendor/lightbox/css/lightbox.css") !!}
{!! Theme::script("vendor/lightbox/js/lightbox-2.6.min.js") !!}
{!! Theme::script("js/device.min.js") !!}
{!! Theme::script("js/jquery.browser.min.js") !!}
{!! Theme::script("js/jquery.appear.js") !!}
{!! Theme::script("js/jquery.parallax.js") !!}
{!! Theme::script("js/twitter/js/jquery.tweet.js") !!}
{!! Theme::script("js/gmap3.min.js") !!}
{!! Theme::script("js/jquery.flexslider-min.js") !!}
{!! Asset::js('f-middle') !!}
{!! Theme::script("js/main.js") !!}
{!! Asset::js('f-bottom') !!}
@stack('css-inline')
@stack('js-inline')
@include('partials.analytics')