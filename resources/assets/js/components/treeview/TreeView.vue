<style>
	.TreeView--user-actions h3 {
		font-size: 12px;
	}

	.TreeView--user-actions ul > li {
		cursor: pointer;
	}

	.TreeView--user-actions .Treeview__title.isActive {
		background-color: #18B4DB;
	}

	.TreeView--user-actions .Treeview__title:hover {
		background-color: #18B4DB;
	}


	.TreeView--user-actions .Treeview__action:hover {
		background-color: rgba(24,180,219,0.25); 
	}

	.TreeView--user-actions .Treeview__action.isActive {
		background-color: rgba(24,180,219,0.25); 
	}

	.TreeView--user-actions,
	.TreeView--user-actions ul {
		padding: 0;
	}


	.TreeView--user-actions h3,
	.TreeView--user-actions .Treeview__title {
		padding: 4px 16px;
	}

	.TreeView--user-actions .Treeview__action > a {
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
	<div class="TreeView TreeView--user-actions">
		<h3>MENU</h3>
		<ul>
			<li class="Treeview__item">
				<div class="Treeview__title u--posRelative">Profiel</div>
				<ul>
					<li class="Treeview__action"><a class="u--linkClean u--block" href="/profile/my-items">Mijn spullen</a></li>
					<li class="Treeview__action"><a class="u--linkClean u--block" href="/profile/details">Gegevens</a></li>
				</ul>
			</li>
			<li class="Treeview__item">
				<div class="Treeview__title u--posRelative">Transacties</div>
				<ul>
					<li class="Treeview__action"><a class="u--linkClean u--block" href="/transactions/ongoing">Lopend</a></li>
					<li class="Treeview__action"><a class="u--linkClean u--block" href="/transactions/history">Geschiedenis</a></li>
				</ul>
			</li>
			<li class="Treeview__item">
				<div class="Treeview__title u--posRelative">Verzoeken</div>
				<ul>
					<li class="Treeview__action"><a class="u--linkClean u--block" href="/requests/incoming">Inkomend</a></li>
					<li class="Treeview__action"><a class="u--linkClean u--block" href="/requests/outgoing">Uitgaand</a></li>
				</ul>
			</li>
		</ul>
	</div>
</header>
</template>
<script>
	export default {
		mounted() {
			var current = location.pathname;
			$('a').each(function(){
				var $this = $(this);
        // if the current path is like this link, make it active
        if($this.attr('href').indexOf(current) !== -1){
        	jQuery($this).parents('.Treeview__action').addClass('isActive');
        	jQuery($this).parents('.Treeview__action').parents('ul').siblings('.Treeview__title').addClass('isActive');
        }
    })
			
		}
	}

</script>
