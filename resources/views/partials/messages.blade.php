@foreach (app('messages')->pull() as $message)
<messages type="{{ $message['type'] }}" :messages="{{ json_encode([$message['content']]) }}"></messages>
@endforeach
