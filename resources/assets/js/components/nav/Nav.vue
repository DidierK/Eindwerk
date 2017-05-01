<style>
	.Nav--header-main a,
	.Nav--header-main ul li {
		display: block;
		height: 52px;
		padding: 0 24px;
		line-height: 52px;
		transition: all 0.15s ease-in-out 0s;
	}

	.Nav--header-main a:hover,
	.Nav--header-main ul li:hover{
		background-color: #226b7b;
		color: #fff;
	}

	@media screen and (max-width: 768px) {
		.Nav--header-main:nth-child(2) {
			position: absolute;
			top: 0;
			right: 15px;
		}
	}
</style>
<template>
	<nav>
		<slot></slot>
	</nav>
</template>
<script>
	export default {

	}
</script>
