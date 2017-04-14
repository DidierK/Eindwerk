<template>
	<v-tabs-nav class="tabs-nav">
	<v-tabs-nav-item class="tabs-nav__item" v-for="tab in tabs"></v-tabs-nav-item>
	<v-tabs-nav>
		<ul>
			<
		</ul>
	</v-nav>
		<slot></slot>
	</div>
</template>
<script>
	export default {
		data: function() {
			return {
				activeTab: '',
				tabs: []
			}
		},
		props: ['activeLink'],
		methods: {
			activate: function(tab){
				// Give tab the active color
				this.activeTab = tab;
				// Broadcast event to change tab content
				this.$emit('activateTab', tab);
			}
		}
	}
</script>
