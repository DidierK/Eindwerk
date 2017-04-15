<style>
	/* We zouden hier beter vie JS form--half-width en form--full-width moeten kunnen togglen bij breakpoint */
	.layout--centered {
		text-align: center;
	}
</style>
<template>
	<div class="layout">
		<slot></slot>
	</div>
</template>

<script>
	export default {
		mounted() {
			console.log('Component ready.')
		}
	}
</script>
