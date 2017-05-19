<style>
	.UserItem--details {
		margin-top: 32px;
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

</style>
<template>
	<div>
		<slot></slot>
	</div>
</header>
</template>
