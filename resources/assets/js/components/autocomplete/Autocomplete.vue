<template>
	<v-form-item class="u--posRelative">
		<input class="Search__field" name="item" placeholder="Wat zoek je?" v-on:keyup="handleKeyUp" v-model="query"></input>    
		<slot></slot>
	</v-form-item>
</template>
<script>
	export default {
		data: function() {
			return {
				query: '',
			}
			},
			methods: {
				handleKeyUp: function () {
					this.$emit('keyup', this.query);	
				}
			},
		}
	</script>