<style>
.AutocompleteSuggestions--main ul {
	padding: 0;
}

.AutocompleteSuggestions--main li {
	border-bottom: 1px solid #DDD;
	padding: 8px;
}
</style>
<template>
	<v-autocomplete-suggestions class="AutocompleteSuggestions--main" v-if="suggestions">
		<ul>
			<li v-for="suggestion in suggestions">
				<a class="u--block" :href="'/item/' + suggestion.url">{{ suggestion.name }}</a>
			</li>
		</ul>
	</v-autocomplete-suggestions>
</template>
<script>
	export default {
		props: ["suggestions"]
	}
</script>
