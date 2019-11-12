<aside id="menu" class="w-56 p-6 bg-gray-200">

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

</aside>
