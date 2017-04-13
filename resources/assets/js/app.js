
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

// Avatar
Vue.component('avatar', require('./components/avatar/Avatar.vue'));

// Header
Vue.component('app-header', require('./components/header/AppHeader.vue'));

// List
Vue.component('app-ul', require('./components/list/AppUnorderedList.vue'));
Vue.component('app-li', require('./components/list/AppListItem.vue'));

// Logo
Vue.component('app-logo', require('./components/logo/AppLogo.vue'));

// Nav
Vue.component('app-nav', require('./components/nav/AppNav.vue'));
Vue.component('nav-item', require('./components/nav/NavItem.vue'));

// Popover
Vue.component('popover', require('./components/popover/Popover.vue'));

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
