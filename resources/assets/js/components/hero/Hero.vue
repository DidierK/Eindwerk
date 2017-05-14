<style>
	.Hero--front > a,
	.Hero__heading,
	.Hero__subheading,
	.Hero__subheading > a {
		color: #FFF;
	}

	.Hero--front {
		background: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url(/images/category-heroes/transport.jpg);
		background-position: 50% 50%; 
		background-size: cover; 
		background-repeat: no-repeat;
	}

	.Hero--front a {
		font-weight: 500;
	}

	.Hero--front .Hero__heading {
		font-size: 32px;
		font-weight: 500;
		padding-top: 2em;
	}

	.Hero--front .Hero__subheading {
		font-size: 16px;
		font-weight: 300;
		padding-bottom: 2em;
	}

	@media (min-width: 768px){
		.Hero--front .Hero__heading {
			font-size: 48px;
		}

		.Hero--front .Hero__subheading {
			font-size: 18px;
		}
	}

	.Hero--category {
		/* DIT IS EEN FALLBACK IMAGE */
		background: linear-gradient(rgba(0, 0, 0, 0.45), rgba(0, 0, 0, 0.45)), url(/images/background1.jpg);
		background-size: cover;
		min-height: 320px;
	}

	.Hero--item {
		background-color: #F7F7F7;
		min-height: 320px;
	}

</style>
<template>
	<div>
		<slot></slot>
	</div>
</template>