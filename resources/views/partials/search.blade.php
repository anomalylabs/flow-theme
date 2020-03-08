<div class="header__search">

    <form>
        <input type="search" placeholder="{{ trans('anomaly.theme.flow::control_panel.search_input') }}">
    </form>

    <ul>
        @foreach (cp()->getNavigation() as $key => $navigation)
            <li>
                <a>
                    {{-- {!! $navigation->icon() !!} --}}
                    <span>{{ $navigation->getTitle() }}</span>
                </a>
                @foreach (cp()->getSections()->root()->visible() as $section)
                    <li>
                        <a>
                            {{-- {!! $section->icon() !!} --}}
                            <span>{{ $navigation->getTitle() }}</span> > {{ $section->getTitle() }}

                            {{-- @if ($section->getLabel())    
                                <span class="tag {{ $section->getContext() }}">
                                    {{ $section->getLabel() }}
                                </span>
                            @endif --}}
                        </a>
                    </li>
                @endforeach
            </li>
        @endforeach
    </ul>
</div>
