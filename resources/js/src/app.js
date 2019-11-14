var bootstrap = require('bootstrap.native/dist/bootstrap-native-v4');

let messages = Array.prototype.slice.call(
    document.querySelectorAll('[data-dismiss="toast"]')
);

messages.forEach(function (message) {

    message['Toast'].delay = 3000;
    message['Toast'].autohide = true;

    message['Toast'].show();
});
