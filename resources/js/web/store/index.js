// window.Vue = require('vue');
window.Vue = require("vue").default;

import Vuex from "vuex";

Vue.use(Vuex);

export const store = new Vuex.Store({
	state: {
		token: ''
	},
	mutations: {
		setToken(state, payload) {
			state.token = payload;
		},
	},
	getters: {
		getData: state => {
			return state.data;
		}
	}
});
