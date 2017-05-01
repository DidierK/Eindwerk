<style>
.Footer--logged-out {
	margin-top: 80px;
}

.Footer--user-item {
	border-top: 1px solid #DDD;
	padding: 8px;
}

.Footer__item--user-info {
    border-right: 1px solid #DDD;
	flex-basis: 75%;
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
