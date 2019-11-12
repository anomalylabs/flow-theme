<div id="top" class="flex items-center justify-between flex-wrap bg-white border-b border-gray-200 p-6">

    <div class="flex items-center flex-shrink-0 text-white mr-6 cp-brand">
        {!! img('anomaly.theme.flow::img/logo.svg')->data() !!}
    </div>

    <div class="block lg:hidden">
        <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
            </svg>
        </button>
    </div>

    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
        <div class="text-sm lg:flex-grow">

            @foreach ($template->get('cp')->getShortcuts() as $shortcut)
            <a class="block mt-4 lg:inline-block lg:mt-0 text-gray-500 hover:text-red-500 transition-color mr-4" {{ html_attributes($shortcut->getAttributes()) }}>
                {{-- {{ icon(shortcut.icon) }} --}}
                {{ $shortcut->getIcon() }}
            </a>                
            @endforeach

            {{-- {#{% if template.module.composer_json.support %}#}
                {#<a href="#" data-toggle="dropdown">#}
                    {#{{ icon('fa fa-life-ring') }}#}
                {#</a>#}

                {#<ul class="dropdown-menu-right dropdown-menu">#}
                    {#<li class="dropdown-header">#}
                        {#{{ trans('streams::support.support', {'type': trans(template.module.title)}) }}#}
                    {#</li>#}
                    {#<li class="dropdown-divider"></li>#}
                    {#{% for type, value in template.module.composer_json.support %}#}
                        {#{% if type == 'email' %}#}
                            {#<li class="dropdown-item">#}
                                {#<a href="mailto:{{ value }}">#}
                                    {#{{ value }}#}
                                {#</a>#}
                            {#</li>#}
                        {#{% else %}#}
                            {#<li class="dropdown-item">#}
                                {#<a href="{{ value }}" target="_blank">#}
                                    {#{{ trans('streams::support.' ~ type) }}#}
                                {#</a>#}
                            {#</li>#}
                        {#{% endif %}#}
                    {#{% endfor %}#}
                    {#<li class="dropdown-divider"></li>#}
                    {#<li class="dropdown-item">#}
                        {#<a href="#" data-toggle="modal" data-target="#modal-help">#}
                            {#{{ trans('streams::support.more') }}#}
                        {#</a>#}
                    {#</li>#}
                {#</ul>#}
            {#{% endif %}#} --}}

        </div>
        <div class="flex">
            <a href="/" target="_blank" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                {{ trans('anomaly.theme.flow::control_panel.view_site') }}
            </a>
            <a href="/admin/logout" class="ml-6 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                {{ trans('anomaly.theme.flow::control_panel.logout') }}
            </a>
            <a href="/users/self" target="_blank"
               class="mt-4 ml-6 lg:inline-block lg:mt-0 text-gray-800 hover:text-red-500">
                <img src="{{ user()->decorate->gravatar->path() }}" width="36" class="rounded-full">
            </a>
        </div>
    </div>
</div>
