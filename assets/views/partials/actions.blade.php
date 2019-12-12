@if (cp()->getButtons()->isNotEmpty())    
    <div id="actions">
        {!! buttons(cp()->getButtons()) !!}
    </div>
@endif
