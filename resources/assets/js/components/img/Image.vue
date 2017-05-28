<style>

	.Image--background {
		background-position: center top;
		background-repeat: no-repeat;
		background-size: cover;
	}

	.Image--round {
		border-radius: 50%;
	}


	.Image--my-items {
		background-position: center top;
		background-repeat: no-repeat;
		background-size: cover;
		border-radius: 2px;
		width: 100%;
		height: 190px;
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