{!! seo_helper()->render() !!}

<link rel="shortcut icon" type="image/x-icon" href="{!! Theme::url('img/favicon.ico') !!}"/>

<script type="text/javascript">
    var helper = {};
    helper.base_url = '{{ url('/') }}';
    helper.theme_url = '{{ Theme::url('/') }}';
</script>

{!! Theme::script('js/modernizr.custom.js') !!}
{!! Theme::script('js/device.min.js') !!}
{!! Theme::script('js/jquery.min.js') !!}
{!! Theme::style('css/style.css') !!}
  
<!--[if lt IE 9]>
{!! Theme::script('js/bootstrap/js/html5shiv.js') !!}
{!! Theme::script('js/bootstrap/js/respond.min.js') !!}
<![endif]-->