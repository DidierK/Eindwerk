<style>
	.RequestForm .FormItem {
		margin: 4px 0;
		width: 100%;
	}

	@media (min-width: 1200px){
		.RequestForm .FormItem--text {
			width: 35%;
			padding-right: 8px;
		}

		.RequestForm .FormItem--button {
			width: 30%;
		}
	}

</style>
<template>
	
</template>
<script>
	export default {
		props: ["action", "method", "data"],
	}
</script>
