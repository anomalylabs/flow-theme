<v-navigation-drawer app clipped>
    <v-list :model="{{ cp()->getNavigation()->toJson() }}">
        <template v-for="link in items">
            <v-list-item
                :key="link.slug"
                link>
            {{-- <v-list-item-action>
            <v-icon>{{ link.icon }}</v-icon>
            </v-list-item-action> --}}
                <v-list-item-content>
                    <v-list-item-title>
                        @verbatim
                        {{ link.text }}
                        @endverbatim
                    </v-list-item-title>
                </v-list-item-content>
            </v-list-item>
        </template>
    </v-list>
</v-navigation-drawer>

{{-- <aside id="sidebar" class="flex flex-col">
    
    <admin-navigation :links="{{ cp()->getNavigation()->toJson() }}"></admin-navigation>

    <footer id="footer">
        <div class="text-xs text-gray-400">
    
            {{ config('streams.distribution.name') }} | {{ config('streams.distribution.version') }} | {{ elapsed_time() }}s
    
        </div>
    </footer>
    
</aside> --}}
