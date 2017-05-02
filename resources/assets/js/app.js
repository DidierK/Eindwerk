
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
Vue.component('v-avatar', require('./components/avatar/Avatar.vue'));

// Banner
Vue.component('v-banner', require('./components/banner/Banner.vue'));

// Button
Vue.component('v-button', require('./components/button/Button.vue'));

// Card
Vue.component('v-card', require('./components/card/Card.vue'));

// Container
Vue.component('v-container', require('./components/container/Container.vue'));

// Footer
Vue.component('v-footer', require('./components/footer/Footer.vue'));

// Form, Form Item
Vue.component('v-form', require('./components/form/Form.vue'));
Vue.component('v-form-item', require('./components/form/FormItem.vue'));

// Header
Vue.component('v-header', require('./components/header/Header.vue'));

// Hero
Vue.component('v-hero', require('./components/hero/Hero.vue'));

// Img
Vue.component('v-img', require('./components/img/Image.vue'));

Vue.component('v-input', require('./components/input/Input.vue'));

// Link
Vue.component('v-link', require('./components/link/Link.vue'));

// List, List item
Vue.component('v-ul', require('./components/list/UnorderedList.vue'));
Vue.component('v-li', require('./components/list/ListItem.vue'));

// Logo
Vue.component('v-logo', require('./components/logo/Logo.vue'));

// Nav
Vue.component('v-nav', require('./components/nav/Nav.vue'));

// Option
Vue.component('v-option', require('./components/option/Option.vue'));

// Popover
Vue.component('v-popover', require('./components/popover/Popover.vue'));

// Search
Vue.component('v-search', require('./components/search/Search.vue'));

// Select
Vue.component('v-select', require('./components/select/Select.vue'));

// Sidebar
Vue.component('v-sidebar', require('./components/sidebar/Sidebar.vue'));

// Tabs
Vue.component('v-tabs', require('./components/tabs/Tabs.vue'));
Vue.component('v-tab', require('./components/tabs/Tab.vue'));

const app = new Vue({
	el: '#app',
	data: {
		showUserActions: false,
	},
	methods: {
		toggleUserActions: function(){
			if(this.showUserActions){
				this.showUserActions = false;	
			} else {
				this.showUserActions = true;
			}
		},
		deleteItem: function(id) {
				axios.delete('/user/item/' + id).then((response) => {
				// Oke the reload did not work and made sometimes the item not delete
				// Instead maybe do a popup with please wait or loading icon before reload?
				// Or load the items with ajax
				window.location.href= '/me/profile';
			});
		}
	}
});
