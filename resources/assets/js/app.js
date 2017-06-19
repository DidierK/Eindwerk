
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

// Popover
Vue.directive('popover', {
	inserted: function(el, binding, vnode) {
  	// This will bind the element with v-popover directive to the popover u mention after the ":"
  	// This popover will then listen for this element to be clicked
  	vnode.context.$refs[binding.arg].reference = el;
  }
});

Vue.directive('modal', {
	inserted: function(el, binding, vnode) {
  	// This will bind the element with v-popover directive to the popover u mention after the ":"
  	// This popover will then listen for this element to be clicked
  	vnode.context.$refs[binding.arg].reference = el;
  }
});

// Avatar
Vue.component('v-avatar', require('./components/avatar/Avatar.vue'));

// Autocomplete, Autocomplete suggestions
Vue.component('v-autocomplete', require('./components/autocomplete/Autocomplete.vue'));
Vue.component('v-autocomplete-header', require('./components/autocomplete/AutocompleteHeader.vue'));
Vue.component('v-autocomplete-main', require('./components/autocomplete/AutocompleteMain.vue'));

// Banner
Vue.component('v-banner', require('./components/banner/Banner.vue'));

//Boxes
Vue.component('v-box1', require('./components/box1/Box1.vue'));

// Button
Vue.component('v-button', require('./components/button/Button.vue'));

// Card
Vue.component('v-card', require('./components/card/Card.vue'));
Vue.component('v-card-header', require('./components/card/CardHeader.vue'));

// Column
Vue.component('v-column', require('./components/column/Column.vue'));

// Container
Vue.component('v-container', require('./components/container/Container.vue'));

// Content
Vue.component('v-content', require('./components/content/Content.vue'));

// Footer
Vue.component('v-footer', require('./components/footer/Footer.vue'));

// Form, Form Item
Vue.component('v-form', require('./components/form/Form.vue'));
Vue.component('v-form-item', require('./components/form/FormItem.vue'));
Vue.component('v-add-item-form', require('./components/form/AddItemForm.vue'));
Vue.component('v-edit-item-form', require('./components/form/EditItemForm.vue'));
Vue.component('v-request-form', require('./components/form/RequestForm.vue'));

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
Vue.component('v-user-items-list', require('./components/list/UserItemsList.vue'));

// Logo
Vue.component('v-logo', require('./components/logo/Logo.vue'));

// Modal
Vue.component('v-modal', require('./components/modal/Modal.vue'));
Vue.component('v-add-item-modal', require('./components/modal/AddItemModal.vue'));
Vue.component('v-edit-item-modal', require('./components/modal/EditItemModal.vue'));

// Nav
Vue.component('v-nav', require('./components/nav/Nav.vue'));

// Option
Vue.component('v-option', require('./components/option/Option.vue'));

// Popover
Vue.component('v-popover', require('./components/popover/Popover.vue'));
Vue.component('v-popover-categories', require('./components/popover/PopoverCategories.vue'));

// Search
Vue.component('v-search', require('./components/search/Search.vue'));

// Select
Vue.component('v-select', require('./components/select/Select.vue'));

// Sidebar
Vue.component('v-sidebar', require('./components/sidebar/Sidebar.vue'));

// Spinner
Vue.component('v-spinner', require('./components/spinner/Spinner.vue'));

// Tabs
Vue.component('v-tabs', require('./components/tabs/Tabs.vue'));
Vue.component('v-tab', require('./components/tabs/Tab.vue'));

// Tree view
Vue.component('v-treeview', require('./components/treeview/TreeView.vue'));

// User item
Vue.component('v-user-item', require('./components/user-item/UserItem.vue'));

// User item details
Vue.component('v-user-item-details', require('./components/user-item-details/UserItemDetails.vue'));

const app = new Vue({
	el: '#app',
	data: {
		showUserActions: false,
		showLoading: false,
		categories: [],
		items: [],
		i: 0,
    city: '',
    query: {
      city: '',
      sortOn: 'newest'
    },
    showLoadingUserItemSearch: false,
    showMobileNav: false

  },
  mounted: function() {
    this.getCategories();
    this.getItems();

    $('#start_date, #end_date').datepicker({ dateFormat: 'dd-mm-yy', minDate: new Date() });


  },
  watch: {
    'query.sortOn': function(val) {
      var self = this;

      this.$refs.userItemsList.showSpinner = true;
      this.sortUserItems(this.$refs.userItemsList.itemUrl, this.getUserItemQueryString(), function(){
        self.$refs.userItemsList.showSpinner = false;
      }); 
    }
  },
  methods: {
   deleteItem: function(id) {
    axios.delete('/user-item/' + id).then((response) => {
				// Oke the reload did not work and made sometimes the item not delete
				// Instead maybe do a popup with please wait or loading icon before reload?
				// Or load the items with ajax
				window.location.href= '/profile/my-items';
			});
  },
  getCategories: function() {
    var self = this;
    if (this.i < 1) { 
      this.showLoading = true;
      axios.get('/api/categories').then((response) => {
				// Just response.data because we didn't put the results in an array 'results' but simply returned the array
				self.categories = response.data;		
				self.i++;
				self.showLoading = false;
			});

    }
  },
  getItems: function() {
    var self = this;
    this.showLoading = true;

    axios.get('/api/items').then((response) => {
      this.showLoading = false;
      self.items = response.data;	
    });

  },
  add: function(){
    console.log("LOL");
  },
  sortUserItemsByCity: function(itemName) {
    // We moeten niet check of query string leeg is omdat we bij leegte van input weer alle items moeten fetchen zoiezo
    // Als er geen query string is wordt de "?" weggelaten automatisch, dus dat is handig
    var self = this
    this.showLoadingUserItemSearch = true;

    this.sortUserItems(itemName, this.getUserItemQueryString(), function(){
      self.showLoadingUserItemSearch = false;
    }); 
  },
  getUserItemQueryString: function() {
   var str = [];

   $.each( this.query, function( key, value ) {
    if(value){
     str.push(key + "=" + value);
   }
 });
   return str.join("&");
 },
 sortUserItems: function(itemName, queryString, callback) {
  var self = this;

  axios.get('/api/item/' + itemName + '/user-items?' + queryString).then((response) => {
    this.$refs.userItemsList.results = response.data;
    callback();
  });
},
toggleMobileNav: function() {
  this.showMobileNav = !this.showMobileNav;
}
}
});
