<aside id="sidebar" class="flex flex-col">
    
    <admin-navigation :links="{{ cp()->getNavigation()->toJson() }}"></admin-navigation>

    <footer id="footer">
        <div class="text-xs text-gray-400">
    
            {{ config('streams::distribution.name') }} | {{ config('streams::distribution.version') }} | {{ elapsed_time() }}s
    
        </div>
    </footer>
    
</aside>
