import Vue from 'vue';

window.Mousetrap = require('mousetrap');
window.Noty = require('noty');

window.app = new Vue({
    el: '#app'
});

// window.matchMedia('(prefers-color-scheme: dark)').addEventListener("change", (e) => {
//     if (e.matches) console.log('your in dark mode);
// });
