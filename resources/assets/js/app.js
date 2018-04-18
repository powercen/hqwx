require('./bootstrap');
window.Vue = require('vue');
import VueRouter from 'vue-router'
import router from './routes'

Vue.use(VueRouter);
//Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',
    router
});
