import {modal as TingleModal} from 'tingle.js';

export class Modal extends TingleModal {
    constructor(options = {}) {
        super({
            closeMethods: ['overlay', 'button', 'escape'],
            closeLabel  : 'Close',
            cssClass    : ['modal'],
            ...options
        });
        this.loadingHtml = '<div class="modal-loading">Loading...</div>';
    }

    async load(href) {
        this.open();
        if ( !this.response ) {
            this.setContent(this.loadingHtml);
            this.response = await fetch(href, {credentials: 'same-origin'});
        }
        const data = this.response.text();
        const fragment = this.processResponse(data, modal);

        this.setContent('');
        this.getContent().appendChild(fragment);

        /**
         * Focus on the first visible input.
         */
        let inputs = Array.prototype.slice.call(
            this.getContent().querySelectorAll('.modal__filter input')
        );

        if ( first = inputs.find((input) => (input.offsetWidth > 0 && input.offsetHeight > 0)) ) {
            first.focus();
        }
    }

    processResponse(data, modal) {

        /**
         * Determine which scripts
         * are already loaded.
         */
        let loaded = Array.prototype.slice.call(
            document.querySelectorAll('script')
        ).filter(function (script) {
            return script.src != '';
        }).map(function (script) {
            return script.src;
        });

        /**
         * Create a fragment to work with.
         * @type {Document}
         */
        let dom        = new DOMParser().parseFromString('<div>' + data + '</div>', 'text/html'),
            fragment   = document.createDocumentFragment(),
            childNodes = dom.body.childNodes;

        while (childNodes.length) fragment.appendChild(childNodes[0]);

        let scripts = Array.prototype.slice.call(
            fragment.querySelectorAll('script')
        );

        /**
         * Append scripts to fragment
         * so they are executed.
         *
         * @type {NodeList}
         */
        for (const script of scripts) {
            if ( loaded.includes(script.src) || script.innerHTML ) {
                continue;
            }
            const element = document.createElement('script');
            element.type = script.type;
            element.src = script.src;
            element.async = false;
            script.parentNode.replaceChild(element, script);
        }
        return fragment;
    }

    static applyModalTogglers(selectors = '[data-toggle="modal"]') {
        for (const el of document.querySelectorAll(selectors)) {
            if ( typeof el._modal === 'undefined' ) {
                el.addEventListener('click', event => {
                    event.preventDefault();
                    if ( typeof event.target._modal === 'undefined' ) {
                        event.target._modal = new Modal();
                    }
                    /** @var {Modal} modal */
                    const modal = event.target._modal;
                    modal.load(event.target.getAttribute('href'));
                });
            }
        }
    }

}
