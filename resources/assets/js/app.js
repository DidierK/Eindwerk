
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

 Vue.component('tab-nav', require('./components/TabNav.vue'));
 Vue.component('profile-nav', require('./components/ProfileNav.vue'));
 Vue.component('transactions-nav', require('./components/TransactionsNav.vue'));
 Vue.component('requests-nav', require('./components/RequestsNav.vue'));
 Vue.component('useractions-popover', require('./components/UserActionsPopover.vue'));

 const app = new Vue({
 	el: '#app',
 	data: {
 		showUserActionsPopover: false,
 		showMyItemsTab: true, // Initial value true because it's the first tab we show on this page
 		showSettingsTab: false,
 		showIncomingRequestsTab: true,
 		showOutgoingRequestsTab: false,
 		showOnGoingTransactionsTab: true,
 		showTransactionsHistoryTab: false
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
 		showUserTab: function(el) {
 			// TODO: Deze funtie efficienter maken door te werken via el en misschien ook de URL.
 			if(el.hasClass('my-items-link')) {
 				this.showMyItemsTab = true;
 				this.showSettingsTab = false;
 			} else if(el.hasClass('settings-link')) {
 				this.showSettingsTab = true;
 				this.showMyItemsTab = false;
 			} else if(el.hasClass('incoming-link')) {
 				this.showIncomingRequestsTab = true;
 				this.showOutgoingRequestsTab = false;
 			} else if(el.hasClass('outgoing-link')) {
 				this.showIncomingRequestsTab = false;
 				this.showOutgoingRequestsTab = true;
 			} else if(el.hasClass('ongoing-link')) {
 				this.showOnGoingTransactionsTab = true;
 				this.showTransactionsHistoryTab = false;
 			} else if(el.hasClass('history-link')) {
 				this.showOnGoingTransactionsTab = false;
 				this.showTransactionsHistoryTab = true;
 			}
 		}
 	}
 });
