import VueRouter from 'vue-router';
import home from '../views/home';


const routes = [
	{
		path: '*', redirect: { name: 'home' }
	},
	{ path: '/', name: 'home', component: home },
];

export const router = new VueRouter({
	mode: 'history',
	routes // short for `routes: routes`
});

// let isWeiXin = window.navigator.userAgent.toLowerCase().match(/MicroMessenger/i) == 'micromessenger';

// if (isWeiXin) {
// 	let toURL = null
// 	router.beforeEach((to, from, next) => {
// 		if (toURL === to.path) {
// 			next()
// 		}
// 		if (to.path !== from.path) {
// 			toURL = to.path
// 			router.replace(to.path)
// 			next()
// 		}
// 		next();
// 	});
// }
