import Vue from 'vue';

window.Mousetrap = require('mousetrap');
window.Noty = require('noty');

window.app = new Vue({
    el: '#app'
});

// window.matchMedia('(prefers-color-scheme: dark)').addEventListener("change", (e) => {
//     if (e.matches) console.log('your in dark mode);
// });

(function (window, document) {

    /**
     * Bind keymaps.
     */
    let keymaps = Array.prototype.slice.call(
        document.querySelectorAll('[data-keymap]')
    );

    keymaps.forEach(function (target) {

        Mousetrap.bind([target.dataset.keymap], function (event) {

            if (!event.target.matches('body')) {
                return;
            }

            event.preventDefault();

            if (target.matches('input, textarea, select')) {

                target.focus();

                return;
            }

            target.click();
        });


        /**
         * Bind (Control || Command) + Space for
         * jumping to the global search input.
         */
        Mousetrap.bind(['command+space', 'ctrl+space'], function (event) {

            event.preventDefault();

            let search = document.querySelector('.header__search input');

            if (!search) {
                return;
            }

            search.focus();
        });
    });
})(window, document);
