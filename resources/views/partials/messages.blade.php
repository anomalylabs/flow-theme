@foreach (app('messages')->pull() as $message)
<messages type="{{ array_get($message, 'type', 'success') }}" :messages="{{ json_encode([$message['content']]) }}"></messages>
@endforeach
