<section id="messages" class="fixed bottom-0 right-0">

    @if (app('messages')->has('success'))
        @foreach (app('messages')->pull('success') as $message)
        <script>
            (function (window, document) {
                new Noty({
                    timeout: 5000,
                    type: 'success',
                    theme: 'streams',
                    layout: 'bottomRight',
                    text: '{{ trans($message) }}',
                }).show();
            })(window, document);
        </script>
        @endforeach
    @endif

    @if (app('messages')->has('info'))
        @foreach (app('messages')->pull('info') as $message)
            <script>
                (function (window, document) {
                    new Noty({
                        type: 'info',
                        timeout: 5000,
                        theme: 'streams',
                        layout: 'bottomRight',
                        text: '{{ trans($message) }}',
                    }).show();
                })(window, document);
            </script>
        @endforeach
    @endif

    @if (app('messages')->has('warning'))
        @foreach (app('messages')->pull('warning') as $message)
            <script>
                (function (window, document) {
                    new Noty({
                        timeout: 5000,
                        theme: 'streams',
                        layout: 'bottomRight',
                        text: '{{ trans($message) }}',
                    }).show();
                })(window, document);
            </script>
        @endforeach
    @endif

    @if (app('messages')->has('error'))
        @foreach (app('messages')->pull('error') as $message)
            <script>
                (function (window, document) {
                    new Noty({
                        timeout: 5000,
                        theme: 'streams',
                        layout: 'bottomRight',
                        text: '{{ trans($message) }}',
                    }).show();
                })(window, document);
            </script>
        @endforeach
    @endif

</section>
