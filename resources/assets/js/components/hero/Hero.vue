<style>
.hero--category {
	/* DIT IS EEN FALLBACK IMAGE */
	background: linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45)), url(/images/background1.jpg);
	background-size: cover;
	min-height: 320px;
}

.hero--item {
	background-color: #F7F7F7;
	min-height: 320px;
}

</style>
<template>
	<div class="hero">
		<slot></slot>
	</div>
</template>