<style>
	.Header {
		border: 0;
		border-radius: 0;
		margin-bottom: 0;
	}

	.Header--logged-out {
		text-align: center;
	}

	.Header--main {
		background-color: #1F758B;
		min-height: 52px;
	}

	.Header--page {
		margin: 4em 0 2em 0;
	}

	.Header--hero {
		padding-top: 8em;
	}

	.Header--dark > * {
		color: #FFF;
	}

	.Header__title {
		font-weight: 500;
		margin: 0;
	}

	@media (max-width:768px){
		.Header--main {
			/* min-height: 96px; */
		}
	}


</style>
<template>
	<header>
		<slot></slot>
	</header>
</template>