@foreach($buttons->primary() as $button)
    {!! $button->open() !!}
        {!! $button->icon() !!}
        {{ $button->getText() }}
    {!! $button->close() !!}
@endforeach

@if (($secondary = $buttons->secondary())->isNotEmpty())
    @foreach ($secondary as $button)
    {!! $button->open() !!}
        {!! $button->icon() !!}
        {{ $button->getText() }}
    {!! $button->close() !!}
    @endforeach    
@endif
