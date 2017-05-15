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

	.Header--main a {
		color: #FFF;
	}

	.Header--bg-transparent {
		background-color: transparent;
	}

	.Header--page {
		padding: 2em 0 2em 0;
	}

	.Header--hero {
		padding-top: 8em;
	}

	.Header--dark > * {
		color: #FFF;
	}

	.Header__title {
	font-size: 18px;
		font-weight: 500;
		margin: 0;
	}

	.Header--user-item-details .Header__avatar-container {
		margin-right: 8px;
	}

</style>
<template>
	<header>
		<slot></slot>
	</header>
</template>