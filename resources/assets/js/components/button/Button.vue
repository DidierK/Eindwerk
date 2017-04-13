<style>
	.button {
		
	}

	.button:focus {
		outline: 0;
	}

	.button--borderless {
		border: 0;
	}	

	.button--no-padding {
		padding: 0;
	}

	.button--transparent {
		background-color: transparent;
	}

</style>
<template>
	<button @click="action" class="button">
		<slot></slot>
	</button>
</template>

<script>
	export default {
		props: ['action']
	}
</script>
