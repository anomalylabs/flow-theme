(function (window, document) {

    /**
     * Bind keymaps.
     */
    let keymaps = Array.prototype.slice.call(
        document.querySelectorAll('[data-keymap]')
    );

    keymaps.forEach(function (target) {

        app.mousetrap.bind([target.dataset.keymap], function (event) {

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
    });

    /**
     * Bind (Control || Command) + Space for
     * jumping to the global search input.
     */
    app.mousetrap.bind(['command+space', 'ctrl+space'], function (event) {

        event.preventDefault();

        let search = document.querySelector('.header__search input');

        if (!search) {
            return;
        }

        search.focus();
    });

})(window, document);
