<style>
	.Nav--main > ul {
		height: 52px;
	}

	.GlobalNav__item {
		padding: 0 16px;
	}

	.GlobalNav__item:hover > * {
		color: #33CBFF;
	}

	.GlobalNav__item:last-child {
		padding-right: 0;
	}

	.GlobalNav__item > * {
		color: #404849;
		font-size: 12px;
		font-weight: 600;
		text-transform: uppercase;
		transition: .15s ease-out;
	}

	.Header--bg-transparent .GlobalNav__item > * {
		color: #FFF;
	}

	.Header--bg-transparent .GlobalNav__item:first-child button::after {
		border-top-color: #FFF;
	}

	.GlobalNav__item:first-child button::after {
		content: '';
		display: inline-block;
		width: 0;
		height: 0;
		border: transparent solid 6px;
		border-radius: 2px;
		border-top-width: 6px;
		border-bottom-width: 0;
		border-top-color: #404849;
		transition: all .25s;
		margin-left: 10px;
	}

	.MobileNavMenu {
		background-color: #10A4FF;
		position: fixed;
		top: 0;
		text-align: center;
		width: 100%;
		z-index: 2;
	}

	.MobileNavMenu .HamburgerIcon {
		position: relative;
		top: -3px;
	}

	.MobileNavMenu__header {
		height: 70px;
		min-height: 70px;
		padding: 0 16px;
	}

	.MobileNavMenu a {
		color: #FFF;
	}

	.MobileNavMenu__search .Search__button {
		position: absolute;
		top: 70px;
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
		background-color: rgba(255,255,255,.1);
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
