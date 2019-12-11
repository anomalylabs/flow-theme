import sweetalert from 'sweetalert'

export class Confirm {
    /**
     * @param {HTMLElement} el
     * @param {SwalOptions} options
     */
    constructor(el, options={}){
        this.el = el;
        this.sweetalert = sweetalert
        const defaultOptions = {
            text: el.dataset.message || null,
            title: el.dataset.title || null,
            icon: el.dataset.icon || null,
            closeOnEsc: el.dataset.esc === undefined ? false : (el.dataset.esc === 'true'),
            closeOnClickOutside: el.dataset.outside === undefined ? false : (el.dataset.outside === 'true'),
            buttons: {
                cancel: {
                    visible: true,
                    text: el.dataset.cancel_text || 'Cancel'
                },
                confirm: {
                    closeModal: el.dataset.close === undefined ? false : (el.dataset.close === 'true'),
                    text: el.dataset.confirm_text || 'OK'
                },
            }
        }
        this.options = {
            ...defaultOptions,
            ...options
        };
        this.eventHandler = function(event) {
            event.preventDefault();
            this.show();
        }
    }



    bind(){
        this.el.addEventListener('click', this.eventHandler)
    }

    unbind(){
        this.el.removeEventListener('click', this.eventHandler)
    }

    async show(){
        const confirmed = await this.sweetalert(this.options);
        if(confirmed) {
            this.unbind();
            this.el.click()
        }
    }
}


// (function (window, document) {
//
//     document.addEventListener('click', function (event) {
//
//         if (!event.target.matches('[data-toggle="confirm"]')) {
//             return;
//         }
//
//         event.preventDefault();
//
//         app.swal({
//             text: event.target.dataset.message || null,
//             title: event.target.dataset.title || null,
//             icon: event.target.dataset.icon || null,
//             closeOnEsc: event.target.dataset.esc == undefined ? false : (event.target.dataset.esc == 'true'),
//             closeOnClickOutside: event.target.dataset.outside == undefined ? false : (event.target.dataset.outside == 'true'),
//             buttons: {
//                 cancel: {
//                     visible: true,
//                     text: event.target.dataset.cancel_text || 'Cancel'
//                 },
//                 confirm: {
//                     closeModal: event.target.dataset.close == undefined ? false : (event.target.dataset.close == 'true'),
//                     text: event.target.dataset.confirm_text || 'OK'
//                 },
//             }
//         }).then((value) => {
//             if (value === true) {
//
//                 event.target.dataset.toggle = 'confirmed';
//
//                 /**
//                  * Simulate a native click and let
//                  * the default/intended action happen.
//                  */
//                 event.target.click();
//             }
//         });
//     });
//
// })(window, document);
