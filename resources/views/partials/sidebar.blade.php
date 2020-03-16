<aside id="sidebar" class="flex flex-col">
    <navigation :links="{{ cp()->getNavigation()->toJson() }}"></navigation>

    @include('anomaly.theme.flow::partials.footer')
</aside>
