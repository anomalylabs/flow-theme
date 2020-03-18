<cp-table :table="{{ $table->toJson() }}">

    <template v-slot:filters>
        @include('admin::table/partials/filters')
    </template>
    
    <template v-slot:heading>
        @include('admin::table/partials/heading')
    </template>

    <template v-slot:table>
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
    </template>
    
</cp-table>
