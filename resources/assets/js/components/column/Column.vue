<style>
	.Column--user-actions {
		background-color: #215765;
		box-sizing: border-box;
		color: #FFF;
		width: 100%;
	}

	@media (min-width: 768px){
		.Column--main {
			margin-left: 240px;
			padding: 0 16px;
		}

		.Column--user-actions {
			position: absolute;
			width: 240px;
			height: 100%;		
		}
	}

</style>
<template>
	<div>
		<slot></slot>
	</div>
</header>
</template>
