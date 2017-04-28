<style>

	.Image--my-items {
		border: 2px solid #DDD;
		border-radius: 1px;
		background-position: center top;
		background-repeat: no-repeat;
		background-size: cover;
		float: left;
		margin-right: 16px;
		height: 72px;
		width: 72px;
	}
	

</style>
<template>
	<img :src="src" v-if="src"/>
	<div :style="{ 'background-image': 'url(' + background + ')' }" v-else></div>
</header>
</template>
<script>
	export default {
		props: ['src', 'background'],
	}
</script>