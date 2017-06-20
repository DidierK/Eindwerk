<style>

	.AuthUserMenu {
		background-color: #404849;
		padding-bottom: 32px;
	}

	.AuthUserMenu ul {
		padding: 0;
	}

	.AuthUserMenu__heading,
	.AuthUserMenu__title,
	.AuthUserMenu__action > a {
		color: #FFF;
	}

	.AuthUserMenu__heading {
		border-bottom: 1px solid #4B5F62;
	}

	.AuthUserMenu__heading,
	.AuthUserMenu__title,
	.AuthUserMenu__action > a {
		padding: 16px 32px;
	}

	.AuthUserMenu__title {
		padding-bottom: 4px;
	}

	.AuthUserMenu__action > a {
		color: #F2F2F2;
		padding: 4px 32px;
	}

	.AuthUserMenu__action > a:hover {
		background-color: rgba(255,255,255,.1);
		color: #33CBFF;
	}
	
	.AuthUserMenu__action.isActive > a {
		color: #33CBFF;
	}

	.AuthUserMenu__title,
	.AuthUserMenu__heading {
		font-size: 14px;
		font-weight: 600;
		text-transform: uppercase;
	}

	.AuthUserMenu__item {
		margin-top: 16px;
	}

	@media (min-width: 768px){
		.AuthContent {
			margin-left: 272px;
			padding: 0 16px;
		}

		.AuthUserMenu {
			float: left;
			height: 100%;
			position: fixed;
			width: 272px;
		}
	}

	@media (max-width: 768px){

		.AuthUserMenu li {
			text-align: center;
		}
	}
</style>
<template>
	<div class="AuthUserMenu">
		<h3 class="AuthUserMenu__heading">Menu</h3>
		<ul>
			<li class="AuthUserMenu__item">
				<div class="AuthUserMenu__title u--posRelative">Dashboard</div>
				<ul>
					<li class="AuthUserMenu__action"><a class="u--linkClean u--block" href="/profile/my-items">Mijn spullen</a></li>
					<li class="AuthUserMenu__action"><a class="u--linkClean u--block" href="/profile/details">Gegevens</a></li>
				</ul>
			</li>
			<li class="AuthUserMenu__item">
				<div class="AuthUserMenu__title u--posRelative">Transacties</div>
				<ul>
					<li class="AuthUserMenu__action"><a class="u--linkClean u--block" href="/transactions/ongoing">Lopend</a></li>
					<li class="AuthUserMenu__action"><a class="u--linkClean u--block" href="/transactions/history">Geschiedenis</a></li>
				</ul>
			</li>
			<li class="AuthUserMenu__item">
				<div class="AuthUserMenu__title u--posRelative">Verzoeken</div>
				<ul>
					<li class="AuthUserMenu__action"><a class="u--linkClean u--block" href="/requests/incoming">Inkomend</a></li>
					<li class="AuthUserMenu__action"><a class="u--linkClean u--block" href="/requests/outgoing">Uitgaand</a></li>
				</ul>
			</li>
		</ul>
	</div>
</template>
<script>
	export default {
		mounted() {
			var current = location.pathname;
			$('a').each(function(){
				var $this = $(this);
        // if the current path is like this link, make it active
        if($this.attr('href').indexOf(current) !== -1){
        	jQuery($this).parents('.AuthUserMenu__action').addClass('isActive');
        	jQuery($this).parents('.AuthUserMenu__action').parents('ul').siblings('.AuthUserMenu_title').addClass('isActive');
        }
    })
			
		}
	}

</script>
