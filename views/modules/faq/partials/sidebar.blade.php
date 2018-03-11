<div class="sidebar">
    <h4 class="uppercase motive"><strong>KATEGORİLER</strong></h4>
    @faqCategories()
    <hr />
    <h4 class="uppercase motive">İSKELE SİSTEMLERİ</h4>
    <div>
        @findChildren('iskele-sistemleri', 'sidebar-children')
    </div>
    <hr />
    <h4 class="uppercase motive">KİRALIK İSKELE SİSTEMLERİ</h4>
    <div>
        @findChildren('kiralik-iskele', 'sidebar-children')
    </div>
</div>