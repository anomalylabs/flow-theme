var bootstrap = require('bootstrap.native/dist/bootstrap-native-v4');

(function (window, document) {

    let messages = Array.prototype.slice.call(
        document.querySelectorAll('.toast')
    );

    messages.forEach(function (message) {
        new bootstrap.Toast(message, {
            delay: message.dataset.delay == undefined ? 3000 : message.dataset.delay,
            autohide: message.dataset.autohide == undefined ? true : Boolean(message.dataset.autohide)
        }).show();
    });

})(window, document);
