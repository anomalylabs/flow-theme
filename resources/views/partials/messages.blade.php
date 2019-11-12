<section id="messages" class="fixed bottom-0 right-0">

    @if (app('messages')->has('success'))
        @foreach (app('messages')->pull('success') as $message)
            <toaster :open="true" type="success" class="p-6 w-72 bg-green-500 text-green-100 color-white rounded mr-3 mb-3" message="{{ markdown(trans($message)) }}"></toaster>  
        @endforeach
    @endif

    @if (app('messages')->has('info'))
        @foreach (app('messages')->pull('info') as $message)
            <toaster :open="true" type="info" class="p-6 w-72 bg-blue-500 text-green-100 color-white rounded mr-3 mb-3" message="{{ markdown(trans($message)) }}"></toaster>  
        @endforeach
    @endif

    @if (app('messages')->has('warning'))
        @foreach (app('messages')->pull('warning') as $message)
            <toaster :open="true" type="warning" class="p-6 w-72 bg-orange-500 text-yellow-100 color-white rounded mr-3 mb-3" message="{{ markdown(trans($message)) }}"></toaster>  
        @endforeach
    @endif

    @if (app('messages')->has('error'))
        @foreach (app('messages')->pull('error') as $message)
            <toaster :open="true" type="error" class="p-6 w-72 bg-error-500 text-yellow-100 color-white rounded mr-3 mb-3" message="{{ markdown(trans($message)) }}"></toaster>  
        @endforeach
    @endif

</section>
