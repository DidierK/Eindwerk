<style>
	.Nav--main > ul {
		height: 52px;
	}

	.Nav--main > ul > li:first-child button::after {
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

	.MobileNavMenu {
		background-color: #10A4FF;
		position: absolute;
		top: 0;
		text-align: center;
		width: 100%;
	}

	.MobileNavMenu__header {
		height: 52px;
		min-height: 52px;
	}

	.MobileNavMenu__search .Search__button {
		top: 52px;
		right: 16px;
	}

	.MobileNavMenu li > a {
		border-bottom: 1px solid #DDD;
		display: block;
		font-size: 18px;
		padding: 32px;
		text-decoration: none;
	}

	.MobileNavMenu li > a:hover {
		background-color: #5DABFB;
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
