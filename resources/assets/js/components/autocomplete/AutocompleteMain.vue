<template>
	<v-autocomplete v-on:keyup="queryItemNames">
	<v-autocomplete-suggestions-main :suggestions="suggestions"></v-autocomplete-suggestions-main>
	</v-autocomplete>
</template>
<script>
	export default {
		data: function() {
			return {
				suggestions: []
			}
		},
		methods: {
			queryItemNames: function (query) {				
				axios.get('api/items/search?q=' + query).then((response) => {
					this.suggestions = response.data.results;
				});
			}
		},
	}
</script>