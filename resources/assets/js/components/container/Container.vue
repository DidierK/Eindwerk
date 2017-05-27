<style>
	
	.Container {
		padding: 0 16px;
		margin: 0 auto;
		max-width: 1170px;
	}

	.Container--logged-out {
		margin: 0 auto;
		max-width: 420px !important;
	}

	.Section--how-it-works {
		background-color: #FFF;
	}

	.Section__title--front {
		font-size: 24px;
		margin-bottom: 2em;
	}

	@media (min-width: 768px){
		.Container {
			max-width:750px;
		}
	}

	@media (min-width: 992px){
		.Container {
			max-width:970px;
		}
	}

	@media (min-width: 1200px){
		.Container {
			max-width:1170px;
			// max-width: 980px;
		}
	}

	.Section--how-it-works,
	.Section--team {
		padding: 2.5em 0;
	}


</style>
<template>
	<div>
		<slot></slot>
	</div>
</header>
</template>
