<style>
	.link--white {
		color: #FFF;
	}
</style>
<template>
	<a class="link" href="#">
		<slot></slot>
	</a>
</template>

<script>
	export default {
		mounted() {
			console.log('Component ready.')
		}
	}
</script>
