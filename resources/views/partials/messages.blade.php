<section id="messages" class="fixed bottom-0 right-0">

    @if (app('messages')->has('success'))
        @foreach (app('messages')->pull('success') as $message)
            <b-toast title="Success" visible static>
                {!! markdown(trans($message)) !!}
            </b-toast>
        @endforeach
    @endif

    @if (app('messages')->has('info'))
        @foreach (app('messages')->pull('info') as $message)
            <b-toast title="Notice" visible static>
                {!! markdown(trans($message)) !!}
            </b-toast>
        @endforeach
    @endif

    @if (app('messages')->has('warning'))
        @foreach (app('messages')->pull('warning') as $message)
            <b-toast title="Warning" visible static>
                {!! markdown(trans($message)) !!}
            </b-toast>
        @endforeach
    @endif

    @if (app('messages')->has('error'))
        @foreach (app('messages')->pull('error') as $message)
            <b-toast title="Error" visible static>
                {!! markdown(trans($message)) !!}
            </b-toast>
        @endforeach
    @endif

</section>
