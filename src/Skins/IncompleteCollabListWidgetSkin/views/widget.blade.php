{{
    XeFrontend::css(
        'plugins/team_vega/src/Skins/IncompleteCollabListWidgetSkin/assets/dist/css/skin.css'
    )->load()
}}

{{
    XeFrontend::js(
        'plugins/team_vega/src/Skins/IncompleteCollabListWidgetSkin/assets/dist/js/skin.js'
    )->load()
}}

<div class="incomplete-collab-list-container swiper">
    <div class="swiper-wrapper">
        @foreach($collabs as $i)
            <div class="swiper-slide slide-item">
                <div class="slide-content-container">
                    <div class="slide-content">
                        <div class="collab-title">{{$i['name']}}</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>