import  mousetrap from 'mousetrap';

export function bindKeymaps() {
    /**
     * Bind keymaps.
     */
    let keymaps = Array.prototype.slice.call(
        document.querySelectorAll('[data-keymap]')
    );

    for(const target of keymaps){

        mousetrap.bind([target.dataset.keymap],  event => {
            if ( !event.target.matches('body') ) {
                return;
            }
            event.preventDefault();
            if ( target.matches('input, textarea, select') ) {
                target.focus();
                return;
            }
            target.click();
        });
    }
    keymaps.forEach(function (target) {

    });

    /**
     * Bind (Control || Command) + Space for
     * jumping to the global search input.
     */
    mousetrap.bind(['command+space', 'ctrl+space'], function (event) {

        event.preventDefault();

        let search = document.querySelector('.header__search input');

        if ( !search ) {
            return;
        }

        search.focus();
    });
}