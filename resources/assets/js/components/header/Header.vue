<style>
	.MainHeader {
		background-color: #FFF;
		border-bottom: 1px solid #DDD;
		box-sizing: border-box;
		min-height: 70px; 
		padding: 0 16px;
		height: 70px;
		top: 0;	
		z-index: 1;
	}

	.HamburgerIcon {
		padding: 0;
		width: 18px;
		height: 18px;
	}

	.MainHeader.u--posFixed ~ .main {
		top: 70px;
		margin-bottom: 70px;
	}

	.Header {
		border: 0;
		border-radius: 0;
		margin-bottom: 0;
	}

	.Header--logged-out {
		text-align: center;
	}

	.Header--main {
		background-color: #10A4FF;
		min-height: 52px; 
		height: 52px;
		top: 0;	
		z-index: 1;
	}

	.Subhead {
		margin-bottom: 16px;
	}

	.Subhead span {
		background-color: #33cbff;
		display: block;
		width: 80px;
		height: 4px;
	}

	.Subhead__heading {
		font-size: 21px;
		font-weight: 600;
		text-transform: uppercase;
	}

	.Subhead--spacious {
		margin-top: 32px;
	}

	.Subhead .SearchForm {
		flex-basis: 480px;
	}


	.Header--main button,
	.Header--main a {
		color: #FFF;
		font-size: 14px;
		font-weight: 500;
	}

	.Header--bg-transparent {
		background-color: transparent;
		border: 0;
	}

	.Header--page {
		padding: 0 0 2em 0;
	}

	.Header--hero {
		padding-top: 8em;
	}

	.Header--dark > * {
		color: #FFF;
	}

	.Header__title {
		font-size: 18px;
		font-weight: 500;
		margin: 0;
	}

	.Header--user-item-details {
		border-bottom: 1px solid #DDD;
		padding-bottom: 8px;
	}

	.Header--user-item-details .UserDetails {
		padding: 8px 0;
	}

	.Header--user-item-details .Header__avatar-container {
		margin-right: 8px;
	}

	.PageHeader__title {
		font-size: 16px;
		margin-bottom: 1em;
	}

	@media screen and (min-width: 768px) {
		.MainHeader {
			padding: 0 32px;
		}
	}

</style>
<template>
	<header>
		<slot></slot>
	</header>
</template>