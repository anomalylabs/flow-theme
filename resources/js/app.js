import './search';
import VueNoty from 'vuejs-noty'
import Messages from "./components/Messages";

// Let's do it the way Laravel does it for now.
window.Vue = require('vue');

// Components
Vue.component('messages', Messages);

// Globally register it.
Vue.use(VueNoty)

// Our bus for future use.
export const bus = new Vue();

const app = new Vue({
  el: '#app',
  
  created() {
    console.log(
      '%c >>> App created',
      'background-color:red;color:white;font-size:11px;padding:5px 10px;')

  }


});

