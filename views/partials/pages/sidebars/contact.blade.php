    <div class="sidebar">
        <h4 class="uppercase motive"><strong>HABERLER</strong></h4>
        @newsLatestPosts(5, 'sidebarLatestPosts')

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