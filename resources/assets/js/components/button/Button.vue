<style>

	.button {
		
	}

	.button--default {
		border-radius: 7.5px;
		font-weight: 600;
		padding: 9px 10px;
	}

	.button:focus {
		outline: 0;
	}

	.button--white {
		background-color: #FFF;
		color: #33bfea;
	}

	.button--blue {
		background-color: #3097D1;
		color: #FFF;
	}

	.button--full-width {
		width: 100%;
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
