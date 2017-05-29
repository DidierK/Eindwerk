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

.RequestsList .UserItemImage {
	width: 48px;
	height: 48px;
}

.RequestsList > .List__item:first-child {
	padding-top: 0;
}

.RequestsList > .List__item {
	border-bottom: 1px solid #DDD;
	padding: 16px 0;
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
