<style>
	/* We zouden hier beter vie JS form--half-width en form--full-width moeten kunnen togglen bij breakpoint */
	.Form--item-creation {
		margin: 0px auto;
		width: 100%;
	}

	.Form--request {
		color: #FFF;
	}

	.Form--request input,
	.Form--request button {
		margin-right: 8px;
	}

	
	
	.Form--request > p,
	.Form--request input[type=text] {
		box-sizing: border-box;
	}

	.ContactForm {
		display: flex;
		flex-wrap: wrap;
	}

	.ContactForm input[type=text],
	.ContactForm textarea {
		width: 100%;
	}

	.ContactForm textarea {
		min-height: 160px;
	}

	
	@media (min-width: 480px){
		.Form--settings .Column--left {
			width: 50%;
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
