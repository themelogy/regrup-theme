@include('partials.footer.certificates')

<footer class="dark">
    <div class="container">

        <div class="row">

            @include('partials.footer.about-us')

            <hr class="visible-xs">

            @include('partials.footer.iskele-sistemleri')

            <hr class="visible-xs">

            @include('partials.footer.iskele-aksesuar')

            <hr class="visible-xs">

            @include('partials.footer.contact')

        </div>

        <!--footer-quick-links-->
    {{--@include('partials.footer.quick-links')--}}
    </div>
    <div class="container" style="border-top: 1px solid dimgrey; margin-top: 20px;">
        <!--footer-bottom-->
        @include('partials.footer.bottom')
    </div>
</footer>