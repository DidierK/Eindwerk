<style>
	.Card {
		background-color: #FFF;
		border-radius: 2px;
		box-shadow: 0 0 0 1px rgba(0,0,0,.1), 0 2px 3px rgba(0,0,0,.2);
		padding: 16px;
	}

	.Card--item-creation {
		/* margin: 0 auto; */
		width: 100%;
	}

	.Card--user-item,
	.Card--user-item-details {
		box-sizing: border-box;
		padding: 8px;
	}

	.Card--user-item-details .Column--right {
		margin-top: 16px;
	}

	.Card--user-item-details > * {
		flex-grow: 1;
	}

	.Card__user-name,
	.Card__user-item-price {
		color: #000;
	}

	.Card__thumbnail {
		background-position: center top;
		background-repeat: no-repeat;
		background-size: cover;
	}

	.Card__thumbnail--user-item {
		margin-bottom: 8px;
		width: 100%;
		height: 250px;
	}

	.Card__footer--user-item {
		border-top: 1px solid #DDD;
		padding: 8px;
	}

	.Card__user-info {
		border-right: 1px solid #DDD;
		flex-basis: 75%;
	}

	@media (min-width: 640px){
		
		.Card--user-item-details > * {
			flex-basis: 0;
		}

		.Card--user-item-details {
			margin-right: 32px;
		}
	}

	@media (min-width: 768px){
		.Card--item-creation {
			width: 40%;
		}
	}

</style>
<template>
	<div>
		<slot></slot>
	</div>
</header>
</template>
