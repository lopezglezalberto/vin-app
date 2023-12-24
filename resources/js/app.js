require('./bootstrap');

//import libraries
import Vue from 'vue';
import VueAxios from 'vue-axios';
import axios from 'axios';
import VueRouter from 'vue-router';
import Select2 from 'v-select2-component';
import Vuelidate from 'vuelidate';
import VueSwal from 'vue-swal'

Vue.use(VueSwal)

Vue.use(Vuelidate);
Vue.component('Select2', Select2);
Vue.use(VueAxios, axios);
Vue.use(VueRouter);

//import Main Component
import App from './components/App.vue';


//import routes

import { routes } from './routes';

const router = new VueRouter(
    {
        mode: 'history', 
        routes
    }
);



const app = new Vue({
    el: '#app',
    router: router,
    render(h) { return h(App)}
});




// const app = new Vue({
//     el: '#app'
// }); 



