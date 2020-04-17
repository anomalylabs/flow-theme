@foreach (messages()->pull() as $message)
<script>
    alert('<messages type="{{ array_get($message, 'type', 'success') }}" :messages="{{ json_encode([$message['content']]) }}"></messages>');
</script>
@endforeach
