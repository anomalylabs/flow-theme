<nav class="topbar">
    
    <div class="topbar__brand">
        {!! img('anomaly.theme.flow::img/logo.svg')->data() !!}
        <span>{{ config('app.name') }}</span>
    </div>

    <div class="topbar__toggle -closed">
        <button type="button" class="topbar__indicator -open" onclick="document.querySelector('.topbar__navigation').classList.add('-open'); document.querySelector('.topbar__toggle').classList.add('-open'); return false;">
            {!! img('anomaly.theme.flow::img/menu-open.svg')->data() !!}
        </button>
        <button type="button" class="topbar__indicator" onclick="document.querySelector('.topbar__navigation').classList.remove('-open'); document.querySelector('.topbar__toggle').classList.remove('-open'); return false;">
            {!! img('anomaly.theme.flow::img/menu-close.svg')->data() !!}
        </button>
    </div>

    <div class="topbar__navigation">
        <div class="topbar__menu">
            @foreach ($template->get('cp')->getShortcuts()->decorate() as $shortcut)
                <a {!! html_attributes($shortcut->getAttributes()) !!}>
                    {{ $shortcut->getTitle() }}
                </a>
            @endforeach
        </div>
    </div>

</nav>
