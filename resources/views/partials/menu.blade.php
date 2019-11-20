<aside id="menu">

    <ul>
        @foreach ($template->get('cp')->getSections()->root()->visible() as $section)
            <li class="{{ $section->isHighlighted() ? 'font-weight-bold' : '' }} {{ $section->isActive() ? 'active' : '' }} {{ $section->getClass() }}">

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

</aside>
