<style>

	.Image--background {
		background-position: center top;
		background-repeat: no-repeat;
		background-size: cover;
	}


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

	.Image--user-item {
		margin-bottom: 8px;
		width: 100%;
		height: 250px;
	}

	.Icon--search {
		fill: #18B4DB;
	}

	.Icon--white {
		fill: #FFF;
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