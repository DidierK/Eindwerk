<style>

</style>
<template>
	<v-autocomplete class="Search__field--header u--sizeFull" v-on:keyup="queryItemNames"></v-autocomplete>
</template>
<script>
	export default {
		data: function() {
			return {
				query: '',
				suggestions: [],
				showSuggestions: false
			}
		},
		mounted: function(){
			// Dees gaat ALLE items all preloaden en deze doorzoeken we dan (misschien ook niet super goed wel)
			var suggestions = [];
			
			axios.get("/api/items/").then((response) => {
				this.suggestions = response.data;
				
			});
			
			
		},
		methods: {
			queryItemNames: function(query) {	
				$( "#q" ).autocomplete({
					source: this.suggestions,
					autoFocus: true,
					delay: 0 
				}).data("ui-autocomplete")._renderItem = function (ul, item) {
					return $("<li></li>")
					.data("item.autocomplete", item)
					.append("<a href='/item/" + item.url + "' class='u--block u--linkClean'>" + item.label + "</a>")
					.appendTo(ul);
				};

			},
		},
	}
</script>