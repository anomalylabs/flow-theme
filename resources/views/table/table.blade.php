{{ assets('scripts.js', 'public::vendor/anomaly/core/js/table/table.js') }}

<div class="o-table" id="{{ $table->prefix() }}table-instance">

    @include('theme::table/partials/filters')
    @include('theme::table/partials/views')
    @include('theme::table/partials/heading')

    <div class="table__container">
        @if ($table->hasRows())
            {!! form_open(['url' => url()->full()]) !!}
                <table {!! html_attributes($table->attributes()) !!}>
                    @include('theme::table/partials/header')
                    @include('theme::table/partials/body')
                    @include('theme::table/partials/footer')
                </table>
            {!! form_close() !!}
        @else
            {{ trans('streams::message.no_results') }}
        @endif
    </div>

</div>
