
@if (app('messages')->has('success'))
    <messages type="success" :messages="{{ json_encode(app('messages')->pull('success')) }}"></messages>
@endif

@if (app('messages')->has('info'))
    <messages type="info" :messages="{{ json_encode(app('messages')->pull('info')) }}"></messages>
@endif

@if (app('messages')->has('warning'))
        <messages type="warning" :messages="{{ json_encode(app('messages')->pull('warning')) }}"></messages>
@endif

@if (app('messages')->has('error'))
        <messages type="error" :messages="{{ json_encode(app('messages')->pull('error')) }}"></messages>
@endif
 

