<section id="messages" class="fixed bottom-0 right-0">

    {{-- Why is this blinking off right away? --}}
    <b-toast title="Success" visible static>
        <p>Wtf? Why is this not persisting?</p>
    </b-toast>

    <template>
    <div class="p-3 bg-secondary progress-bar-striped" style="min-height: 170px;">
        <b-button class="mb-2" variant="primary" @click="$bvToast.show('example-toast')">
        Show toast
        </b-button>
        <b-toast id="example-toast" title="BootstrapVue" static no-auto-hide>
        Hello, world! This is a toast message.
        </b-toast>
    </div>
    </template>

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
