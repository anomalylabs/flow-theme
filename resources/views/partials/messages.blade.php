<section id="messages" class="fixed bottom-0 right-0">

    @if (app('messages')->has('success'))
        @foreach (app('messages')->pull('success') as $message)
            <div class="toast">
                <div class="toast-header">
                    
                    <svg class="bd-placeholder-img rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect fill="#48bb78" width="100%" height="100%"></rect></svg>

                    <strong class="mr-auto">Success</strong>
                    {{-- <small>11 mins ago</small> --}}
                    
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" data-delay="3000">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="toast-body">
                    {!! markdown(trans($message)) !!}
                </div>
            </div>
        @endforeach
    @endif

    @if (app('messages')->has('info'))
        @foreach (app('messages')->pull('info') as $message)
            <div class="toast">
                <div class="toast-header">
                    
                    <svg class="bd-placeholder-img rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect fill="#4299e1" width="100%" height="100%"></rect></svg>

                    <strong class="mr-auto">Notice</strong>
                    {{-- <small>11 mins ago</small> --}}
                    
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" data-delay="3000">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="toast-body">
                    {!! markdown(trans($message)) !!}
                </div>
            </div>
        @endforeach
    @endif

    @if (app('messages')->has('warning'))
        @foreach (app('messages')->pull('warning') as $message)
            <div class="toast">
                <div class="toast-header">
                    
                    <svg class="bd-placeholder-img rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect fill="#ed8936" width="100%" height="100%"></rect></svg>

                    <strong class="mr-auto">Warning</strong>
                    {{-- <small>11 mins ago</small> --}}
                    
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" data-delay="3000">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="toast-body">
                    {!! markdown(trans($message)) !!}
                </div>
            </div>
        @endforeach
    @endif

    @if (app('messages')->has('error'))
        @foreach (app('messages')->pull('error') as $message)
            <div class="toast">
                <div class="toast-header">
                    
                    <svg class="bd-placeholder-img rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect fill="#f56565" width="100%" height="100%"></rect></svg>

                    <strong class="mr-auto">Error</strong>
                    {{-- <small>11 mins ago</small> --}}
                    
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" data-delay="3000">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="toast-body">
                    {!! markdown(trans($message)) !!}
                </div>
            </div>
        @endforeach
    @endif

</section>
