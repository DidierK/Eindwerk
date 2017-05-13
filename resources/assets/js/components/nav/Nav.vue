<style>
	.Nav--main > ul {
		height: 52px;
	}

	.Nav--main > ul > li:first-child::after {
		content: '';
		display: inline-block;
		width: 0;
		height: 0;
		border: transparent solid 6px;
		border-top-width: 6px;
		border-bottom-width: 0;
		border-top-color: white;
		transition: all .25s;
		margin-left: 10px;
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
