import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue'

Vue.use(BootstrapVue);

var app = new Vue({
    el: '#app'
});

// window.matchMedia('(prefers-color-scheme: dark)').addEventListener("change", (e) => {
//             if (e.matches) console.log('your in dark mode);
//             });
