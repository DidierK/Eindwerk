<style>
	.nav__item {
		display: inline-block;
		margin-top: 13px;
		margin-left: 32px;
		padding-right: 0;
		padding-left: 0;
	}
</style>
<template>
	<li class="nav__item">
		<a class="nav__link" href="#">
			<slot></slot>	
		</a>
	</li>
</template>