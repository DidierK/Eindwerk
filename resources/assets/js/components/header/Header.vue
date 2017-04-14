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

</style>
<template>
	<header class="header">
		<div class="container">
			<slot></slot>
		</div>
	</header>
</template>