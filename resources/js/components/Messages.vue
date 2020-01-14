<template></template>
<script>
export default {
    name: "messages",
    props: {
        messages: {
            type: Array,
            required: true
        },
        type: {
            type: String,
            required: true
        }
    },
    mounted() {
        // TODO: Onliner..
        if(this.type==="error") this.$noty.error(this.messages.join('<br>'));
        if(this.type==="success") this.$noty.success(this.messages.join('<br>'));
        if(this.type==="warning") this.$noty.warning(this.messages.join('<br>'));
        if(this.type==="info") this.$noty.info(this.messages.join('<br>'));
        
    }
};
</script>

