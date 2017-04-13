<style>
	.link--white {
		color: #FFF;
	}
</style>
<template>
	<a class="link" :href="link">
		<slot></slot>
	</a>
</template>

<script>
	export default {
		props: ["link"]
	}
</script>
