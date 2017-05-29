<style>
	.TreeView .Treeview__heading {
		background-color: #F3F5F8;
		color: #484848;
		font-size: 14px;
	}

	.TreeView--user-actions .Treeview__title.isActive {
		// background-color: #F3F5F8;
	}

	.TreeView--user-actions .Treeview__action:hover {
		background-color: #F3F5F8;
	}

	.TreeView--user-actions .Treeview__action.isActive {
		border-left: 2px solid #10a4ff;
	}

	.TreeView--user-actions .Treeview__action.isActive > a {
		color: #10a4ff;
	}

	.TreeView--user-actions,
	.TreeView--user-actions ul {
		padding: 0;
	}

	.TreeView--user-actions .Treeview__title,
	.TreeView--user-actions .Treeview__action > a {
		border-top: 1px solid #DDD;
	}


	.TreeView--user-actions h3,
	.TreeView--user-actions .Treeview__title {
		padding: 8px 16px;
	}

	.TreeView--user-actions .Treeview__action > a {
		padding: 8px 32px;
	}

	.TreeView--user-actions,
	.TreeView--user-actions a {
		color: #000;
	}
	@media (max-width: 768px){
		.TreeView--user-actions li {
			text-align: center;
		}
	}
</style>
<template>
<v-card class="Card Card--treeview">
	<div class="TreeView TreeView--user-actions">
		<h3 class="Treeview__heading">Menu</h3>
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
</v-card>
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
