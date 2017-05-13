<template>
	<v-autocomplete-suggestions>
		<ul>
			<li v-for="suggestion in suggestions">
				<a :href="'/item/' + suggestion.url">{{ suggestion.name }}</a>
			</li>
		</ul>
	</v-autocomplete-suggestions>
</template>
<script>
	export default {
		props: ["suggestions"]
	}
</script>
