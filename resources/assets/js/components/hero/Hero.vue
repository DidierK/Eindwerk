<style>
.hero--category {
	/* TODO: INSTEAD INLINE CHANGE THIS ACCORDING TO CATEGORY BTW */
	background: linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45)), url(/images/background1.jpg);
	background-size: cover;
	min-height: 300px;
}

</style>
<template>
	<div class="hero">
		<slot></slot>
	</div>
</template>