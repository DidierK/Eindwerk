<template>
	<div v-show="showTab">
		<slot></slot>
	</div>
</template>
<script>
	export default {
		data: function() {
			return {
				showTab: false
			}
		},
		props: ['label', 'selected'],
		mounted(){
			// So we can use the same this inside a function
			var self = this;
			// On mount check if this tab is selected (we add a selected property on that tag)
			if (typeof this.selected !== 'undefined' && this.selected === '') {
				// Give that tab the active class
				this.$parent.$data.activeTab = this.label;
				// Show the tab content
				this.showTab = true;
			}
			// Push label to parent!
			this.$parent.$data.tabs.push(this.label);
			this.$parent.$on('activateTab', function(tab) {
				// Now every tab component will check for its own if the changed is the same as the label give to this tab
				if (self.label === tab) {
					self.showTab = true;
				} else {
					self.showTab = false;
				}
			})
		}
	}
</script>