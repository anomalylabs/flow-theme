<cp-table :table="{{ $table->toJson() }}"></cp-table>

{{ assets('scripts.js', 'public::vendor/anomaly/core/js/table/table.js') }}

<div class="o-table" id="{{ $table->prefix() }}table-instance">

    @include('admin::table/partials/filters')
    @include('admin::table/partials/views')
    @include('admin::table/partials/heading')

    <div class="table__container">
        @if ($table->hasRows())
            {!! form_open(['url' => url()->full()]) !!}
                <table {!! html_attributes($table->attributes()) !!}>
                    @include('admin::table/partials/header')
                    @include('admin::table/partials/body')
                    @include('admin::table/partials/footer')
                </table>
            {!! form_close() !!}
        @else
            {{ trans('streams::message.no_results') }}
        @endif
    </div>

</div>
