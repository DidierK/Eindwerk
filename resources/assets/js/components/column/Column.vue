<style>
	.Column--main {
		padding: 0 16px;
	}

	.Column--user-actions {
		background-color: #175173;
		box-sizing: border-box;
		color: #FFF;
		width: 100%;
	}

	@media (min-width: 768px){
		.Column--main {
			margin-left: 240px;
		}

		.Column--user-actions {
			position: fixed;
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
