<style>
	.Avatar--default {
		border-radius: 50%;
	}

</style>
<template>
	<img :src="src" />
</template>
<script>
	export default {
		props: ['src'],
	}
</script>
