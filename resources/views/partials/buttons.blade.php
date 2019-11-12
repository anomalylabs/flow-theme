@if ($template->cp->getButtons()->isNotEmpty())    
    <div id="buttons">
        {{ buttons($template->cp->getButtons()) }}
    </div>
@endif
