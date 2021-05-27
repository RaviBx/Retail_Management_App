const { mixin } = require('vue/types/umd');


require('./bootstrap');

window.Vue = require('vue').default;



Vue.component('example-component', require('./components/ExampleComponent.vue').default);



mixin.disableNotifications();


const app = new Vue({
    el: '#app',
});
