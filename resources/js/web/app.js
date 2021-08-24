/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('../bootstrap');

import Vue from 'vue';
import Vuetify from 'vuetify/lib';
// import 'vuetify/dist/vuetify.min.css'
import { store } from './store/index'
import { router } from './router/index'
import moment from 'moment';
// import vuetify from './assets/vuetify'


window.Vue = require("vue").default;
window.toastr = require('toastr');

toastr.options = {
	"closeButton": true,
	"debug": false,
	"newestOnTop": true,
	"progressBar": true,
	"positionClass": "toast-top-right",
	"preventDuplicates": false,
	"showDuration": "300",
	"hideDuration": "1000",
	"timeOut": "2000",
	"extendedTimeOut": "1000",
	"showEasing": "swing",
	"hideEasing": "linear",
	"showMethod": "slideDown",
	"hideMethod": "slideUp",
}

// Vue.use(BootstrapVue);
Vue.use(Vuetify);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
	router,
	store,
	methods: {
		goToPage(name, query = null, params = null) {
			this.$router.push({ name: name, params: params, query: query });
		},
		back() {
			this.$router.go(-1);
		}
	},
    vuetify: new Vuetify({})
}).$mount('#web');
