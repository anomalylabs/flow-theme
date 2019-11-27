<aside id="sidebar">

    <ul>
        @foreach ($template->get('cp')->getNavigation() as $key => $navigation)
            <li data-slug="{{ $navigation->getSlug() }}">
                <a {!! html_attributes($navigation->attributes()) !!}>
                    {!! $navigation->icon() !!}
                    <span>{{ trans($navigation->getTitle()) }}</span>
                </a>
                @if ($navigation->isActive())
                    <ul>
                        @foreach ($template->get('cp')->getSections()->root()->visible() as $section)
                            <li>
                                <a {!! html_attributes($section->attributes()) !!}>
                                    {!! $section->icon() !!}
                                    {{ $section->getTitle() }}

                                    @if ($section->getLabel())    
                                        <span class="tag {{ $section->getContext() }}">
                                            {{ $section->getLabel() }}
                                        </span>
                                    @endif
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </li>
        @endforeach
    </ul>

</aside>
