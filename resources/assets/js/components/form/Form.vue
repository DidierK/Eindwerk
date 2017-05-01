<style>
	/* We zouden hier beter vie JS form--half-width en form--full-width moeten kunnen togglen bij breakpoint */
	.Form--item-creation,
	.Form--settings {
		width: 100%;
	}

	.Form--search {
		position: relative;
	}

	@media (min-width: 768px){
		.Form--item-creation,
		.Form--settings {
			width: 50%;
		}
	}
</style>
<template>
	<form :action="action" :method="method">
		<slot></slot>
	</form>
</template>

<script>
	export default {
		props: ["action", "method"],
		mounted() {
			console.log('Component ready.')
		}
	}
</script>
