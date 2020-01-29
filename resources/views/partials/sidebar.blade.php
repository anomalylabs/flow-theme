
<aside id="sidebar">

    <ul>
        @foreach (cp()->navigation as $key => $item)
            <li data-slug="{{ $item->getSlug() }}">
                
                <a {!! html_attributes($item->attributes()) !!}>
                    {!! $item->icon() !!}
                    <span>{{ trans($item->getTitle()) }}</span>
                </a>
                
                <ul class="<?php $item->isActive() ? 'active' : null; ?>">
                    @foreach ($item->getSections()->root()->visible() as $section)
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
                
            </li>
        @endforeach
    </ul>

</aside>
