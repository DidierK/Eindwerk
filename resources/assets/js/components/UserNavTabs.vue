<template>
	<div>
		<div class="user-nav">
			<div class="container">
				<ul class="nav-items-container transaction-nav list-inline half-width-items">
					<li v-for="tab in tabs" >
						<a v-on:click.prevent="activate(tab)" :class="{ active: (activeTab === tab) }" href="#">{{ tab }}</a>
					</li>
				</ul>			
			</div>
		</div>
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
