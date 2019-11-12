var bootstrap = require('bootstrap.native/dist/bootstrap-native-v4');

let messages = Array.prototype.slice.call(
    document.querySelectorAll('.toast')
);

messages.forEach(function (message) {
    new bootstrap.Toast(message).show();
});
