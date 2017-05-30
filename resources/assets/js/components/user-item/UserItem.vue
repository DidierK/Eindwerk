<style>
	.UserItem > .Column {
		width: 100%;
	}

	.UserItem .Card {
		margin-bottom: 16px;
	}

	.UserItem--details {
		margin-top: 32px;
	}

	.RequestsTable__row {
		position: relative;
	}

	.RequestsTable__row .Request__actions {
		display: flex;
		position: absolute;
		right: 0;
	}

	@media (max-width: 768px){
		.RequestsTable__row {
			border-top: 1px solid #DDD;
			display: flex;
			flex-direction: column;
			justify-content: space-between;
		}
	}

	@media (min-width: 768px){
		.RequestsTable__row {
			display: flex;
			align-items: center;
		}	
	}

	.RequestsTable__header, 
	.RequestsTable__row {
		border-bottom: 1px solid #DDD;
	}

	.RequestsTable .TableHeader__title {
		font-weight: 500;
	}

	.RequestsTable .UserItemImage {
		width: 36px;
		height: 36px;
	}

	.RequestsTable__row {
		padding: 16px 0;
	}

	.RequestDetails__row {
		display: flex;
		justify-content: space-between;
		padding: 4px 0;
	}

	.MyItem__info {
		border-top: 1px solid #DDD;
		padding: 16px;
		line-height: 20px;
		height: 20px;
	}

	.MyItem__requests > * {
		float: left	
	}

	.MyItem__title {
		width: 50%;
		text-overflow: ellipsis;
		white-space: nowrap;
		overflow: hidden;
	}

	.MyItem__request-count {
		font-size: 16px;
		margin-right: 8px;
		line-height: 18px;
	}

	.MyItem__actions svg {
		position: relative;
		width: 18px;
		height: 18px;
	}

	.MyItem__actions .MyItem__delete-icon {
		top: -2.5px;
	}

	.UserItem--details header,
	.UserItem--details .Column--right > p,
	.UserItem--details .UserItem__price,
	.UserItem--details .Form--request,
	.UserItem--details .Errors,
	.UserItem--details .Alert-success {
		margin-bottom: 1em;
	}

	.UserItem--details .Errors,
	.UserItem--details .Alert-success {
		padding: 8px;
	}

	.UserItem--details .Errors {
		border: 1px solid #ff7c7c;
	}

	.UserItem--details .Errors h3 {
		color: #ff7c7c;
	}

	.UserItem--details .Errors ul li {
		list-style: disc;
	}

	.UserItem--details .Alert-success {
		border: 1px solid #5daf7a;

	}

	.UserItem--details .Alert-success h3 {
		color: #5daf7a;
	}

	.UserItem--details h3 {
		margin-bottom: .5em;
	}

	.UserItem--details .UserItem__price {
		font-size: 18px;
		font-weight: 600;
	}

	@media (min-width: 768px){
		.UserItem > .Column {
			width: 47.5%;
		}

		.UserItem > .Column--left {
			margin-right: 2.5%;
		}
	}
</style>
<template>
	<div>
		<slot></slot>
	</div>
</header>
</template>
