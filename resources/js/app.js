import Vue from 'vue';

Vue.component('person-list',require('./components/person/list.vue').default);
Vue.component('proyect-component',require('./components/person/proyect.vue').default);
Vue.component('pays-component',require('./components/person/pay.vue').default);

const app = new Vue({
    el: '#app',
    mounted(){
        //loading config default

    },
    component:{}
});

require('./bootstrap');
require('admin-lte/plugins/jquery/jquery.min.js');
require('admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js');
require('admin-lte/dist/js/adminlte.min.js');

