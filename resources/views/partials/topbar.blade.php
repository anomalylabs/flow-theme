<nav class="topbar">
    <div class="topbar__brand">
        {!! img('anomaly.theme.flow::img/logo.svg')->data() !!}
        <span>Streams</span>
    </div>
    <div class="topbar__toggle">
        <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <title>Menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
            </svg>
        </button>
    </div>
    <div class="topbar__navigation">
        <div class="topbar__menu">
            <a href="#responsive-header">Docs</a>
            <a href="#responsive-header">Examples</a>
            <a href="#responsive-header">Blog</a>
            <a href="/" target="_blank">
                {{ trans('anomaly.theme.flow::control_panel.view_site') }}
            </a>
            <a href="/admin/logout">
                {{ trans('anomaly.theme.flow::control_panel.logout') }}
            </a>
            <a href="/users/self" target="_blank" class="mt-4 ml-6 lg:inline-block lg:mt-0 text-gray-800 hover:text-red-500">
                <img src="{{ user()->decorate->gravatar->path() }}" width="36" class="rounded-full">
            </a>
        </div>
        <div class="topbar__menu">
            <a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">Download</a>
        </div>
    </div>
</nav>
