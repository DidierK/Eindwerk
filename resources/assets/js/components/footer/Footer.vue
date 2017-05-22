<style>
.Footer--logged-out {
	margin-top: 80px;
}

.Footer--main {
	background-color: #1a455f;
	padding: 16px;
	z-index: 1;
}

.Footer--main a {
	color: #FFF;
}

.Footer--user-item {
	border-top: 1px solid #DDD;
	padding: 8px;
}

</style>
<template>
	<footer>
		<slot></slot>
	</footer>
</template>
<script>
	export default {
	}
</script>
