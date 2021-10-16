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

<div class="incomplete-collab-list">
    <h2 class="title">
        <span>{{ $_config['title'] }}</span>
    </h2>
    <div class="incomplete-collab-list-container swiper">
        <div class="swiper-wrapper">
            @foreach($collabs as $i)
                <div class="swiper-slide slide-item">
                    <div class="slide-content-container" style="background-image: url('https://i.ytimg.com/vi/{{$i['video']}}/original.jpg')">
                        <div class="slide-content">
                            <div class="collab-title">
                                {{$i['name']}}
                            </div>
                            <div class="collab-details">
                                <span>파트 {{count($i['users'])}}개</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>