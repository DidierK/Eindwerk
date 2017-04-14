<style>
	.link:hover {
		text-decoration: none;
	}

	.link--white {
		color: #FFF;
	}

	.link--white:hover {
		color: #DDD;
	}

	.link--UserActions {
		border-bottom: 1px solid #DDDDDD;
		color: #636b6f;
		display: block;
		padding: 16px;	
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
