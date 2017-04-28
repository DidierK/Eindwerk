<style>
	
	.Container {
		padding: 0 16px;
		margin: 0 auto;
		max-width: 1170px;
	}

	.Container--logged-out {
		margin: 0 auto;
		max-width: 420px;
	}

	@media (min-width: 768px){
		.Container {
			width:750px;
		}
	}

	@media (min-width: 992px){
		.Container {
			width:970px;
		}
	}

	@media (min-width: 1200px){
		.Container {
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
