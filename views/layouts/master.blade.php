<!DOCTYPE html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}">

<head>
    @include('partials.metadata')
</head>

<body class="gray withAnimation">

<div class="wrapper">

    @include('partials.header')

    @yield('content')

    @include('partials.footer')

    @include('partials.footer.go-to-top')

</div>

@include('partials.scripts')

</body>
</html>