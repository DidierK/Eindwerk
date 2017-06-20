<style>

	.AuthUserMenu {
		background-color: #404849;
		padding-bottom: 32px;
		position: fixed;
		width: 100%;
		z-index: 1;
	}

	.AuthUserMenu.isClosed {
		height: 55px;
		padding-bottom: 0;
		overflow: hidden;
	}

	.AuthUserMenu.isOpened {
		height: 100%;
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
		cursor: pointer;
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
			width: 272px;
		}
	}

	@media (max-width: 768px){

		.AuthUserMenu ~ .Content {
			padding-top: 87px;
		}

		.AuthUserMenu li {
			text-align: center;
		}
	}
</style>
<template>
	<div id="aum" class="AuthUserMenu isClosed">
		<h3 class="AuthUserMenu__heading" v-on:click="toggleAuthUserMenu">Menu</h3>
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

        if($(window).width() > 768){
        	$("#aum").addClass('isOpened').removeClass('isClosed');
        }

        window.addEventListener("resize", function(event) {
        	if($(window).width() > 768){
        		$("#aum").addClass('isOpened').removeClass('isClosed');
        	} else {
        		$("#aum").addClass('isClosed').removeClass('isOpened');
        	}
        });
    })
			
		},
		methods: {
			toggleAuthUserMenu: function(e) {
				if($("#aum").hasClass('isClosed')) {
					$("#aum").addClass('isOpened').removeClass('isClosed');
				} else {
					$("#aum").addClass('isClosed').removeClass('isOpened');
				}
			}
		}
	}

</script>
