<style>

	.TransactionSummary {
		background-color: #FFF;
		border: 1px solid #DDD;
		border-radius: 2px;
	}

	.TransactionSummary__heading,
	.TransactionSummary__content {
		padding: 16px;
	}

	.TransactionSummary__heading {
		background-color: #F3F5F8;
		display: flex;
		flex-wrap: wrap;
	}

	.TransactionSummary__item-thumbnail {
		border-radius: 2px;
		width: 42px;
		height: 42px;
	}

	.TransactionSummary__item-name {
		font-size: 14px;
		margin: 0;
		text-transform: uppercase;
	}

	.TransactionSummary__small-title {
		color: #B7B7B7;
		display: block;
	}

	@media (max-width: 768px) {
		.TransactionSummary__date-container {
			margin-top: 8px;
		}
	}

	.TransactionSummary__price-container,
	.TransactionSummary__day-amount-container,
	.TransactionSummary__total-container {
		display: flex;
		justify-content: space-between;
		padding: 8px 0;
	}

	.TransactionSummary__content .TransactionSummary__small-title {
		color: #404849;
		margin: 0;
	}

	.TransactionSummary__total-container {
		border-top: 1px solid #40484f;
	}

	.TransactionSummary__total-container .TransactionSummary__small-title,
	.TransactionSummary__total-price {
		font-weight: 700;
	}

	.CompleteProfile {
		background-color: #F76255;
		border-radius: 2px;
		color: #FFF;
		margin-bottom: 16px;
		padding: 16px;
	}

	.CompleteProfile p {
		color: #FFF;
	}

	.Remark p {
		font-style: italic;
	}

	.UserItem > .Column {
		width: 100%;
	}

	.UserItem .Card {
		margin-bottom: 16px;
	}

	.UserItem--details {
		margin-top: 32px;
	}

	.UserProfile__user-rating {
		color: #B7B7B7;
		font-size: 14px;
	}

	.UserProfile__details {
		border-top: 1px solid #DDD;
	}

	.UserProfile__details svg {
		float: left;
		margin-top: 3px;
		margin-right: 8px;
	}

	@media (min-width: 480px){
		.UserProfile > div:first-child {
			margin-right: 32px;
		}
	}

	.RequestsTable {
		border: 1px solid #DDD;
		border-radius: 2px;
		background-color: #FFF;
		min-height: 250px;
	}

	.RequestsTable__row {
		position: relative;
	}

	.RequestsTable__row .Request__actions {
		display: flex;
		position: absolute;
		right: 32px;
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
			padding: 16px 32px !important;
		}

		.Disclaimer {
			width: 50%;
		}	
	}

	.RequestsTable__header {
		background-color: #F3F5F8;
		padding: 32px;
	}

	.RequestsTable__header, 
	.RequestsTable__row {

		border-bottom: 1px solid #DDD;
	}

	.RequestsTable .TableHeader__title {
		color: #404849;
		font-size: 12px;
		font-weight: 700;
		text-transform: uppercase;
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
