<style>
	
	.container {
		padding: 0 16px;
		margin: 0 auto;
		max-width: 1170px;
	}

	.container--logged-out {
		margin: 0 auto;
		max-width: 420px;
	}

	.container--layout-centered {
		text-align: center;
	}

	@media (min-width: 768px){
		.container{
			width:750px;
		}
	}

	@media (min-width: 992px){
		.container{
			width:970px;
		}
	}

	@media (min-width: 1200px){
		.container{
			width:1170px;
		}
	}


</style>
<template>
	<div class="container">
		<slot></slot>
	</div>
</header>
</template>
