<style>
	.nav--float-left {
		float: left;
	}

	.nav--float-right {
		float: right;
	}

	.nav--header {
		position: relative;
	}

	.nav__item--header,
	.nav__item--header li {
		display: block;
		height: 60px;
		padding: 0 24px;
		line-height: 60px;
		transition: all 0.15s ease-in-out 0s;
	}

	.nav__item--header:hover {
		background-color: #226b7b;
		color: #fff;
	}

	@media screen and (max-width: 768px) {
		.nav--header-right {
			position: absolute;
			top: 0;
			right: 15px;
		}
	}
</style>
<template>
	<nav class="nav">
		<slot></slot>
	</nav>
</template>
<script>
	export default {

	}
</script>
