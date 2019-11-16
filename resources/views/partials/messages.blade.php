<section id="messages" class="fixed bottom-0 right-0">

    @if (app('messages')->has('announcements'))
        @foreach (app('messages')->pull('announcements') as $message)
            <b-toast class="-primary" title="Announcements" visible static no-auto-hide>
                {!! markdown(trans($message)) !!}
            </b-toast>
        @endforeach
    @endif

    @if (app('messages')->has('success'))
        @foreach (app('messages')->pull('success') as $message)
            <b-toast class="-success" title="Success" visible static>
                {!! markdown(trans($message)) !!}
            </b-toast>
        @endforeach
    @endif

    @if (app('messages')->has('info'))
        @foreach (app('messages')->pull('info') as $message)
            <b-toast class="-info" title="Notice" visible static>
                {!! markdown(trans($message)) !!}
            </b-toast>
        @endforeach
    @endif

    @if (app('messages')->has('warning'))
        @foreach (app('messages')->pull('warning') as $message)
            <b-toast class="-warning" title="Warning" visible static>
                {!! markdown(trans($message)) !!}
            </b-toast>
        @endforeach
    @endif

    @if (app('messages')->has('error'))
        @foreach (app('messages')->pull('error') as $message)
            <b-toast class="-error" title="Error" visible static>
                {!! markdown(trans($message)) !!}
            </b-toast>
        @endforeach
    @endif

</section>
