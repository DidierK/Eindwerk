<style>
	.nav--float-right {
		float: right;
	}

	.nav--header {
		position: relative;
	}

	@media screen and (max-width: 768px) {
		.nav--header {
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
