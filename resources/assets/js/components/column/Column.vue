<style>
	
	.Column--user-actions {
		box-sizing: border-box;
		color: #000;
		width: 100%;
	}

	@media (min-width: 768px){
		.Column--main {
			margin-left: 272px;
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
