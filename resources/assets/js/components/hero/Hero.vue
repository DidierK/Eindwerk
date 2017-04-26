<style>
.hero--category {
	/* DIT IS EEN FALLBACK IMAGE */
	background: linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45)), url(/images/background1.jpg);
	background-size: cover;
	min-height: 400px;
}

</style>
<template>
	<div class="hero">
		<slot></slot>
	</div>
</template>