<section id="messages" class="fixed bottom-0 right-0">

    @if (app('messages')->has('success'))
        @foreach (app('messages')->pull('success') as $message)
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="3000" data-autohide="true">
                <div class="toast-header">
                    
                    <svg class="bd-placeholder-img rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect fill="#007aff" width="100%" height="100%"></rect></svg>

                    <strong class="mr-auto">Bootstrap</strong>
                    <small>11 mins ago</small>
                    
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="toast-body">
                        {!! markdown(trans($message)) !!}
                </div>
            </div>
            {{-- <toaster :open="true" type="success" class="p-6 w-72 bg-green-500 text-green-100 color-white rounded mr-3 mb-3" message="{{ markdown(trans($message)) }}"></toaster>   --}}
        @endforeach
    @endif

    @if (app('messages')->has('info'))
        @foreach (app('messages')->pull('info') as $message)
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="3000" data-autohide="true">
                <div class="toast-header">
                    
                    <svg class="bd-placeholder-img rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect fill="#007aff" width="100%" height="100%"></rect></svg>

                    <strong class="mr-auto">Bootstrap</strong>
                    <small>11 mins ago</small>
                    
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="toast-body">
                        {!! markdown(trans($message)) !!}
                </div>
            </div>
            {{-- <toaster :open="true" type="info" class="p-6 w-72 bg-blue-500 text-green-100 color-white rounded mr-3 mb-3" message="{{ markdown(trans($message)) }}"></toaster>   --}}
        @endforeach
    @endif

    @if (app('messages')->has('warning'))
        @foreach (app('messages')->pull('warning') as $message)
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="3000" data-autohide="true">
                <div class="toast-header">
                    
                    <svg class="bd-placeholder-img rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect fill="#007aff" width="100%" height="100%"></rect></svg>

                    <strong class="mr-auto">Bootstrap</strong>
                    <small>11 mins ago</small>
                    
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="toast-body">
                        {!! markdown(trans($message)) !!}
                </div>
            </div>
            {{-- <toaster :open="true" type="warning" class="p-6 w-72 bg-orange-500 text-yellow-100 color-white rounded mr-3 mb-3" message="{{ markdown(trans($message)) }}"></toaster>   --}}
        @endforeach
    @endif

    @if (app('messages')->has('error'))
        @foreach (app('messages')->pull('error') as $message)
            <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="3000" data-autohide="true">
                <div class="toast-header">
                    
                    <svg class="bd-placeholder-img rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect fill="#007aff" width="100%" height="100%"></rect></svg>

                    <strong class="mr-auto">Bootstrap</strong>
                    <small>11 mins ago</small>
                    
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="toast-body">
                        {!! markdown(trans($message)) !!}
                </div>
            </div>
            {{-- <toaster :open="true" type="error" class="p-6 w-72 bg-error-500 text-yellow-100 color-white rounded mr-3 mb-3" message="{{ markdown(trans($message)) }}"></toaster>   --}}
        @endforeach
    @endif

</section>
