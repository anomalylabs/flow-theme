<aside id="sidebar" class="w-56 p-6 bg-white drop-shadow-xs rounded">

    <ul>
        @foreach ($template->get('cp')->getNavigation() as $key => $navigation)
            <li data-slug="{{ $navigation->getSlug() }}">
                <a
                        class="text-gray-600 py-2 block hover:text-gray-800 transition-color {{ $navigation->isActive() ? 'text-gray-800 font-bold' : '' }}"
                        title="{{ $navigation->getTitle() }}"
                        {!! html_attributes($navigation->getAttributes()) !!}>
                    {{-- <span class="icon">{{ navigation.icon()|raw }}</span> --}}
                    <span class="title">{{ trans($navigation->getTitle()) }}</span>
                </a>
            </li>
        @endforeach
    </ul>

</aside>
