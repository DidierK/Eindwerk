<style>
	.TreeView--user-actions h3 {
		font-size: 12px;
	}

	.TreeView--user-actions ul > li {
		cursor: pointer;
	}

	.TreeView--user-actions > ul > li:first-child > div {
		background-color: #18B4DB;
	}

	.TreeView--user-actions > ul > li > div:hover {
		background-color: #18B4DB;
	}

	.TreeView--user-actions > ul > li:first-child > ul > li:first-child > a {
		background-color: rgba(24,180,219,0.25) 
	}

	.TreeView--user-actions > ul > li > ul > li:hover > a {
		background-color: rgba(24,180,219,0.25) 
	}

	.TreeView--user-actions,
	.TreeView--user-actions ul {
		padding: 0;
	}



	.TreeView--user-actions h3,
	.TreeView--user-actions li > div {
		padding: 4px 16px;
	}

	.TreeView--user-actions li > ul > li > a {
		padding: 4px 32px;
	}

	.TreeView--user-actions div::after {
		content: '';
		display: inline-block;
		width: 0;
		height: 0;
		border: transparent solid 6px;
		border-top-width: 6px;
		border-bottom-width: 0;
		border-top-color: white;
		position: absolute;
		top: 12px;
		right: 16px;
		transition: all .25s;
	}

	.TreeView--user-actions,
	.TreeView--user-actions a {
		color: #FFF;
	}
	@media (max-width: 768px){
		.TreeView--user-actions li {
			text-align: center;
		}
	}
</style>
<template>
	<div>
		<slot></slot>
	</div>
</header>
</template>
