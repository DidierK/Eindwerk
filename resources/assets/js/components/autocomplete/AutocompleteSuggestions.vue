<template>
	<div class="Search__suggestions">
		<slot></slot>
	</div>
</template>
<script>
	export default {
		props: ["results"]
	}
</script>
