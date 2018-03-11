<div class="col-md-3 col-sm-6">
    <h4 class="uppercase">BİZE ULAŞIN</h4>
    <div class="info-icons">
        <div class="table-row">
            <div class="table-cell text-center">
                <i class="fa fa-phone motive"></i>
            </div>
            <div class="table-cell">
                Mobil: {{ setting('theme::mobile') }}
            </div>
        </div>
        <div class="table-row">
            <div class="table-cell text-center">
                <i class="fa fa-phone motive"></i>
            </div>
            <div class="table-cell">
                Telefon: {{ setting('theme::phone') }}
            </div>
        </div>
        <div class="table-row">
            <div class="table-cell text-center">
                <i class="fa fa-phone motive"></i>
            </div>
            <div class="table-cell">
                Faks: {{ setting('theme::fax') }}
            </div>
        </div>
        <br>
        <div class="table-row">
            <div class="table-cell text-center">
                <i class="fa fa-map-marker motive"></i>
            </div>
            <div class="table-cell">
                {{ setting('theme::address') }}
            </div>
        </div>
        <br>
        <div class="table-row">
            <div class="table-cell text-center">
                <i class="fa fa-envelope motive"></i>
            </div>
            <div class="table-cell">
                <a href="mailto:{{ Html::email(setting('theme::email')) }}">{{ Html::email(setting('theme::email')) }}</a><br>
                {{ $_SERVER['HTTP_HOST'] }}
            </div>
        </div>
    </div>
    <br/>
    @include('partials.components.socials')
</div>