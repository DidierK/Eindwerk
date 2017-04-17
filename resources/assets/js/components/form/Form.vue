<style>
	/* We zouden hier beter vie JS form--half-width en form--full-width moeten kunnen togglen bij breakpoint */
	.form--item-creation,
	.form--settings {
		width: 100%;
	}

	@media (min-width: 768px){
		.form--item-creation,
		.form--settings {
			width: 50%;
		}
	}
</style>
<template>
	<form class="form" :action="action" :method="method">
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
