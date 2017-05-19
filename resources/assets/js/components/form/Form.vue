<style>
	/* We zouden hier beter vie JS form--half-width en form--full-width moeten kunnen togglen bij breakpoint */
	.Form--item-creation,
	.Form--settings {
		margin: 0px auto;
		width: 100%;
	}

	.Form--request {
		color: #FFF;
		background-color: #31b2ff;
		padding: 1px;
	}

	

	.Form--request input,
	.Form--request button {
		border: 0;
		border-right: 1px solid #31b2ff;
		border-radius: 0;
	}

	

	@media (min-width: 640px){ 
		.Form--request {
			display: flex;
		}

	}

	@media (max-width: 640px){ 
		.Form--request > p,
		.Form--request input[type=text] {
			width: 100%;
			box-sizing: border-box;
		}

	}

	
	@media (min-width: 768px){
		.Form--settings {
			width: 40%;
		}
	}
</style>
<template>
	<form :action="action" :method="method">
		<slot></slot>
	</form>
</template>

<script>
	export default {
		props: ["action", "method"],
		mounted() {
			console.log('Component ready.')
		}
	}
</script>
