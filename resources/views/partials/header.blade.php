@php
    $links = [];
    foreach (cp()->getShortcuts() as $shortcut) {
        $links[]=[
            'attributes'=>$shortcut->attributes(),
            'title'=>$shortcut->getTitle()
    ];
    
    }
    
@endphp
<layout-top
    :links="{{json_encode($links)}}"
    app-name="{{ config('app.name') }}"
></layout-top>


{{--@include('anomaly.theme.flow::partials.search')--}}