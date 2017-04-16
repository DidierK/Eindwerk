<style>
	.header {
		border: 0;
		border-radius: 0;
		margin-bottom: 0;
	}

	.header--logged-out {
		text-align: center;
	}

	.header--main {
		background-color: #3F6780;
		min-height: 48px;
	}

	.header--page {
		margin: 4em 0 2em 0;
	}

	.header__title {
		font-weight: 500;
		margin: 0;
	}

	@media (max-width:768px){
		.header--main {
			min-height: 96px;
		}
	}


</style>
<template>
	<header class="header">
			<slot></slot>
	</header>
</template>