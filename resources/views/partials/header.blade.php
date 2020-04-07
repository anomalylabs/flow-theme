<v-app-bar app="true" id="header" clipped-left>
    {{-- <v-toolbar-side-logo>
        {!! img('anomaly.theme.flow::img/logo.svg')->path() !!}
    </v-toolbar-side-logo> --}}
    <v-toolbar-title>
        {{ config('app.name') }}
    </v-toolbar-title>

    {{-- <v-spacer/> --}}

    {{-- <admin-shortcuts :shortcuts="{{ cp()->shortcuts->toJson() }}"></admin-shortcuts> --}}

    {{-- <v-spacer/> --}}

    {{-- <v-btn icon>
        <v-icon>mdi-apps</v-icon>
    </v-btn> --}}

</v-app-bar>
