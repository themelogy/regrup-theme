<div class="row">
    <div class="col-md-12">
        <div class="quick-links" style="margin-top: 20px;">
            <div class="quick-link">
                {{ trans('themes::theme.footer.quick title 1') }}
                <div class="btn-group dropup">
                    <button type="button" class="btn btn-link btn-xs  dropdown-toggle" data-toggle="dropdown">
                        {{ trans('themes::theme.footer.quick title 1') }} <span class="caret"></span>
                    </button>
                    {!! Menu::render('quick-links-1', \Themes\Regrup\Presenter\FooterMenuPrefixedLinksPresenter::class) !!}
                </div>
            </div>
            <div class="quick-link">
                {{ trans('themes::theme.footer.quick title 2') }}:
                <div class="btn-group dropup">
                    <button type="button" class="btn btn-link btn-xs  dropdown-toggle" data-toggle="dropdown">{{ trans('themes::theme.footer.quick title 2') }} <span class="caret"></span>
                    </button>
                    {!! Menu::render('quick-links-2', \Themes\Regrup\Presenter\FooterMenuPrefixedLinksPresenter::class) !!}
                </div>
            </div>
        </div>
    </div>
</div>