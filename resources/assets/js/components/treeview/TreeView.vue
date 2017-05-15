<style>
	.TreeView--user-actions {
		padding: 0;
	}

	.TreeView--user-actions ul li {
		display: none;
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
    transition: all .25s;
    margin-left: 10px;
		}

	.TreeView--user-actions,
	.TreeView--user-actions a {
		color: #FFF;
	}
	@media (max-width: 768px){
		.TreeView--user-actions ul {
			padding: 0;	
		}

		
	

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
