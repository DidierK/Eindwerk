<style>
.UserItem--details > * {
	flex-grow: 1;
	margin-top: 32px;
}

.UserItem--details header,
.UserItem--details p,
.UserItem--details .UserItem__price {
	margin-bottom: 2em;
}

.UserItem--details .UserItem__price {
	font-size: 18px;
	font-weight: 600;
}

@media (min-width: 640px){
		.UserItem--details > * {
			flex-basis: 0;
	}
}
</style>
<template>
	<div>
		<slot></slot>
	</div>
</header>
</template>
