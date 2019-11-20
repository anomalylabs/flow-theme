<aside class="sidebar__wrapper">

    <ul>
        @foreach ($template->get('cp')->getNavigation() as $key => $navigation)
            <li data-slug="{{ $navigation->getSlug() }}">
                <h5 class="mb-0">
                <a
                        class="text-gray-600 py-2 block hover:text-gray-800 transition-color {{ $navigation->isActive() ? 'text-gray-800 font-bold' : '' }}"
                        title="{{ $navigation->getTitle() }}"
                        {!! html_attributes($navigation->getAttributes()) !!}>
                    {{-- <span class="icon">{{ navigation.icon()|raw }}</span> --}}
                    <span class="title">{{ trans($navigation->getTitle()) }}</span>
                </a>
                </h5>
                @if ($navigation->isActive())
                    <ul>
                        @foreach ($template->get('cp')->getSections()->root()->visible() as $section)
                            <li class="text-gray-500 py-2 block hover:text-gray-800 transition-color {{ $section->isHighlighted() ? 'text-gray-600 font-bold' : '' }} {{ $section->isActive() ? 'active' : '' }} {{ $section->getClass() }}">

                                <a {!! html_attributes($section->getAttributes()) !!}>
                                    {{-- {{ section.icon ? icon(section.icon)|raw }} --}}
                                    {{ $section->getTitle() }}

                                    @if ($section->getLabel())    
                                        <span class="tag tag-{{ $section->getContext() }}">
                                            {{ $section->getLabel() }}
                                        </span>
                                    @endif
                                </a>

                                {{-- @if ($section->highlighted)    
                                    <ul>
                                        @foreach ($section->children($section->slug)->visible() as $item)
                                            
                                        @endforeach
                                            {{ self.sections(sections, child) }}
                                        {% endfor %}
                                    </ul>
                                @endif --}}
                            </li>
                        @endforeach
                    </ul>
                @endif
            </li>
        @endforeach
    </ul>

</aside>
