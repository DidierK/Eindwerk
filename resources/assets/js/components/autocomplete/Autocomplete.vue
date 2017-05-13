<template>
	<v-form-item class="u--posRelative">
		<input class="Search__field" name="item" placeholder="Wat zoek je?" v-on:keyup="queryItemNames" v-model="query"></input>    
		<v-autocomplete-suggestions></v-autocomplete-suggestions>
	</v-form-item>
</template>
<script>
	export default {
		data: function() {
			return {
				query: ''
			}
		},
		methods: {
			queryItemNames: function () {
				axios.get('api/items?name=' + query).then((response) => {
				window.location.href= '/me/profile';
			});
			}
		},
	}
</script>