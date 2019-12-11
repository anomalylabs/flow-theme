import Vue from 'vue';

export class Application {

    constructor() {
        this.root = new Vue({});
        this.callbacks = [];
    }

    onStart(callback){
        this.callbacks.push(callback)
        return this;
    }

    start() {
        this.root.$mount('#app');
    }
}
