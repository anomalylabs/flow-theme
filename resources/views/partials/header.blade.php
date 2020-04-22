<header id="header">

    <v-toolbar-title>
        {{ config('app.name') }}
    </v-toolbar-title>

    <admin-shortcuts :shortcuts="{{ cp()->shortcuts->toJson() }}"></admin-shortcuts>

</header>
