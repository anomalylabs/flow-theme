<aside id="sidebar">

    <ul>
        @foreach ($template->get('cp')->getNavigation() as $key => $navigation)
            <li data-slug="{{ $navigation->getSlug() }}">
                <h4>
                <a {!! html_attributes($navigation->attributes()) !!}>
                    {{-- <i class="icon">{{ navigation.icon()|raw }}</i> --}}
                    <span>{{ trans($navigation->getTitle()) }}</span>
                </a>
                </h4>
                @if ($navigation->isActive())
                    <ul>
                        @foreach ($template->get('cp')->getSections()->root()->visible() as $section)
                            <li class="{{ $section->isHighlighted() ? 'text-gray-600 font-bold' : '' }} {{ $section->isActive() ? 'active' : '' }} {{ $section->getClass() }}">

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
