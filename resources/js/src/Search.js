


export class Search {

    /**
     *
     * @param {HTMLElement} el
     */
    constructor(el) {
        this.el = el;
        this.input = el.querySelector('form input')
        this.items = Array.prototype.slice.call(
            this.el.querySelectorAll('ul > li')
        );

        this.bind()
    }


    bind(){

        // inside a shorthand function
        this.input.addEventListener('focus',  (event) => {
            event.preventDefault();
            this.open();
        }, true);
        // the difference:
        // inside a function
        const self = this
        this.input.addEventListener('blur', function(event) {
            event.preventDefault();
            self.close();
        }, true);

        // the other event listeners...
    }

    open () {
        this.el.classList.add('-open');
    }

    close () {
        this.el.classList.remove('-open');
    }

    /**
     * Show the specified item.
     *
     * @param {Element} item
     */
    show (item) {
        item.style.display = 'inherit';
    }

    /**
     * Hide the specified item.
     *
     * @param {Element} item
     */
    hide (item) {
        item.style.display = 'none';
        item.classList.remove('selected');
    }

    /**
     * Select the specified item.
     *
     * @param {Element} item
     */
    select (item) {
        item.style.display = 'inherit';
        item.classList.add('selected');
    }

    clearSelection () {
        this.items.forEach((item) => item.classList.remove('selected'));
    }

    visibility (visible = true) {
        return this.items.filter((item) => visible === (item.offsetWidth > 0 && item.offsetHeight > 0));
    }

    getSelected(){
        return this.items.find((item) => item.classList.contains('selected'))
    }
}


// (function (window, document) {
//
//
//     /**
//      * Listen for focus on
//      * the search component.
//      */
//     document.addEventListener('focus', function (event) {
//
//         if (!event.target.matches('.header__search form input')) {
//             return;
//         }
//
//         event.preventDefault();
//
//         let search = event.target.closest('.header__search');
//
//         search.classList.add('-open');
//     });
//
//     /**
//      * Listen for blur on
//      * the search component.
//      */
//     document.addEventListener('blur', function (event) {
//
//         if (!event.target.matches('.header__search form input')) {
//             return;
//         }
//
//         event.preventDefault();
//
//         let search = event.target.closest('.header__search');
//
//         search.classList.remove('-open');
//     });
//
//     /**
//      * Listen for keydown to search
//      * if focus / target matches.
//      */
//     document.addEventListener('keyup', function (event) {
//
//         // Up/Down Keys
//         if (event.which == 38 || event.which == 40) {
//             return;
//         }
//
//         if (!event.target.matches('.header__search form input')) {
//             return;
//         }
//
//         event.preventDefault();
//
//         let search = event.target.closest('.header__search');
//
//         let [items, selected] = setup(search);
//
//         /**
//          * Search the list by the items to
//          * show only those containing value.
//          *
//          * @param {Element} item
//          */
//         items.forEach(function (item) {
//
//             let text = item.innerText.toLowerCase();
//
//             if (text.indexOf(event.target.value.toLowerCase()) >= 0) {
//                 show(item);
//             } else {
//                 hide(item);
//             }
//         });
//
//         let visible = visibility(items);
//
//         /**
//          * Select the first visible by default.
//          */
//         if (visible[0] && (!selected || !(selected.offsetWidth > 0 && selected.offsetHeight > 0))) {
//             clearSelection(items);
//             select(visible[0]);
//         }
//     });
//
//     /**
//      * Listen for down arrow to
//      * move the item selection.
//      */
//     app.mousetrap.bind(['up', 'down'], function (event) {
//
//         if (!event.target.matches('.header__search form input')) {
//             return;
//         }
//
//         event.preventDefault();
//
//         let search = event.target.closest('.header__search');
//
//         let [items, selected] = setup(search);
//
//         let visible = visibility(items);
//
//         if (selected) {
//
//             /**
//              * If we have a selection then
//              * push to the next visible option.
//              */
//             visible.some((item, i) => {
//                 if (item == selected && item.offsetWidth > 0 && item.offsetHeight > 0) {
//
//                     // UP- (prev) | DOWN+ (next)
//                     var index = event.which == 40 ? i + 1 : i - 1; // 40 = DOWN
//
//                     if ((target = visible[index]) != undefined) {
//
//                         clearSelection(visible);
//                         select(target);
//
//                         return true;
//                     }
//                 }
//             });
//
//             return;
//         }
//
//         /**
//          * Select the first visible by default.
//          */
//         if (visible[0] && (!selected || !(selected.offsetWidth > 0 && selected.offsetHeight > 0))) {
//             clearSelection(items);
//             select(visible[0]);
//         }
//     });
//
//     /**
//      * Listen for the shortcut to
//      * focus on the search component.
//      */
//     app.mousetrap.bind(['control+space', 'alt+space'], function (event) {
//
//         if (!event.target.matches('body')) {
//             return;
//         }
//
//         event.preventDefault();
//
//         open(document.querySelector('.header__search'));
//     });
//
// })(window, document);