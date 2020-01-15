<div class="form__layout">
    @if ($form->fields->isEmpty())
        {{ trans("streams::message.no_fields_available") }}
    @else
        @if ($form->sections->isnotEmpty())
            @foreach ($form->sections as $section)
                @if (isset($section['view']))
                    @include($section['view'])
                @elseif (isset($section['html']))
                    {!! $section['html'] !!}
                @elseif (isset($section['tabs']))
                    @include('theme::form/partials/tabs')
                @else
                    @include('theme::form/partials/section')
                @endif
            @endforeach
        @else
            @include('theme::form/partials/default')
        @endif
        
    @endif
</div>
