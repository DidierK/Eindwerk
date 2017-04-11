
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

 require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

 Vue.component('profile-nav', require('./components/ProfileNav.vue'));
 Vue.component('transactions-nav', require('./components/TransactionsNav.vue'));
 Vue.component('requests-nav', require('./components/RequestsNav.vue'));
 Vue.component('user-nav-tabs', require('./components/UserNavTabs.vue'));
 Vue.component('user-nav-tab', require('./components/UserNavTab.vue'));
 Vue.component('useractions-popover', require('./components/UserActionsPopover.vue'));

 const app = new Vue({
 	el: '#app',
 	data: {
 		showUserActionsPopover: false,
 	},
 	mounted() {

 	},
 	methods: {
 		openPopoverUserActions: function(event) {
 			if(!this.showUserActionsPopover) {
 				this.showUserActionsPopover = true;
 			} else {
 				this.showUserActionsPopover = false;
 			}
 		},
 	}
 });
