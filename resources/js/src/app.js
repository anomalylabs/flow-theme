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

    let actions = Array.prototype.slice.call(
        document.querySelectorAll('[data-keymap]')
    );

    actions.forEach(function (action) {

        /**
         * !:focus + ESC
         */
        Mousetrap.bind([action.dataset.keymap], function (event) {

            if (!event.target.matches('body')) {
                return;
            }

            event.preventDefault();

            if (action.matches('input, textarea, select')) {

                action.focus();

                return;
            }

            action.click();
        });

    });
})(window, document);
