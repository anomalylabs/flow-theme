import './polyfills'
import {bindKeymaps} from './bindKeymaps';

export * from './Application';
export * from './app';
export * from './Modal';
export * from './Confirm';
export * from './Search';

import {Modal} from './Modal';
import {Confirm} from './Confirm';
import {Search} from './Search';


// why use onstart?
// because other scripts can use this as well
app.onStart(() => {
    Search(document.getElementById('#search'));

    // the difference in binding:
    document.querySelectorAll('[data-toggle="confirm"]').forEach(el => new Confirm(el));
    Modal.applyModalTogglers();

    bindKeymaps();

});