<template>
    <v-card tile>
        <v-navigation-drawer app clipped>
        
            <v-list v-for="link in links" :key="link.slug">
                <v-subheader>{{ link.title }}</v-subheader>
                <v-list-item
                    v-for="section in link.sections"
                    :href="section.attributes.href"
                    :key="section.slug"
                    link>
                    <v-list-item-content>
                        <v-list-item-title>
                            {{ section.title }}
                        </v-list-item-title>
                    </v-list-item-content>
                </v-list-item>
            </v-list>

        </v-navigation-drawer>
    </v-card>
</template>

<script>
export default {
    props: {
        links: Array,
    },
    ready() {
        console.log("Sidebar ready.");
    }
};
</script>
