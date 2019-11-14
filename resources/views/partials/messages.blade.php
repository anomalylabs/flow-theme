<section id="messages" class="fixed bottom-0 right-0">

    @if (app('messages')->has('success'))
        @foreach (app('messages')->pull('success') as $message)
            <b-toast title="Success">
                {!! markdown(trans($message)) !!}
            </b-toast>
                
            {{-- <svg class="bd-placeholder-img rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect fill="#48bb78" width="100%" height="100%"></rect></svg> --}}

        @endforeach
    @endif

    @if (app('messages')->has('info'))
        @foreach (app('messages')->pull('info') as $message)
            <b-toast title="Notice">
                {!! markdown(trans($message)) !!}
            </b-toast>
            
            {{-- <svg class="bd-placeholder-img rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect fill="#4299e1" width="100%" height="100%"></rect></svg> --}}

        @endforeach
    @endif

    @if (app('messages')->has('warning'))
        @foreach (app('messages')->pull('warning') as $message)
            <b-toast title="Warning">
                {!! markdown(trans($message)) !!}
            </b-toast>
            
            {{-- <svg class="bd-placeholder-img rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect fill="#ed8936" width="100%" height="100%"></rect></svg> --}}

        @endforeach
    @endif

    @if (app('messages')->has('error'))
        @foreach (app('messages')->pull('error') as $message)
            <b-toast title="Error">
                {!! markdown(trans($message)) !!}
            </b-toast>
            
            {{-- <svg class="bd-placeholder-img rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect fill="#f56565" width="100%" height="100%"></rect></svg> --}}

        @endforeach
    @endif

</section>
