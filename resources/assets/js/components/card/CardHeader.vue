<style>

.Card__header {
	/* border-bottom: 1px solid #DDD; */
	margin-bottom: 16px;
}

.Card__header .Card__title {
	font-size: 18px;
}

@media (min-width: 450px){
		.Card__header--my-items {
			display: flex;
		}
	}

</style>
<template>
	<header>
		<slot></slot>
	</header>
</header>
</template>
