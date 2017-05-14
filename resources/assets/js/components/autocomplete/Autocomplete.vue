<template>
	
		<input id="q" class="Search__field" name="item" placeholder="Wat zoek je?" v-on:keyup="handleKeyUp" v-on:keydown="handleKeyDown" v-model="query"></input>    
		
	
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
				},
				handleKeyDown: function () {
					this.$emit('keydown', this.query);	
				}
			},
		}
	</script>