<nav class="topbar">
    
    <div class="topbar__brand">
        {!! img('anomaly.theme.flow::img/logo.svg')->data() !!}
        <span>{{ config('app.name') }}</span>
    </div>

    <div class="topbar__toggle">
        <button type="button" id="topbar__indicator -active">
            {!! img('anomaly.theme.flow::img/menu-open.svg')->data() !!}
        </button>
        <button type="button" id="topbar__indicator">
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
