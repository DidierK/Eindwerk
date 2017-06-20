<style>

	.Button--primary {
		border: 0;
		border-radius: 2px;
		padding: 12px 16px;
		background-color: #40484f;
		color: #FFF;
		font-size: 12px;
		font-weight: 600;
		text-transform: uppercase;
		transition: .3s;
	}

	.Button--primary:hover {
		color: #33CBDD;
	}

	.Button:disabled {
		opacity: .5;
	}

	.Button, 
	button, 
	input[type=submit] {
		cursor: pointer;
	}

	.Button--notification {
		height: 42px;
		line-height: 0;
	}

	a.Button:hover {
		text-decoration: none;
	}

	.Button--link {
		text-decoration: underline;
	}

	.Button--default {
		border-radius: 2px;
		font-size: 14px;
		font-weight: 500;
		padding: 12px 16px;
	}

	.Button--default:hover {
		background-color: #22A8CA;

	}

	.Button--small {
		line-height: 30px;
		height: 30px;
		border: 0;
		border-radius: 2px;
		font-size: 14px;
		font-weight: 500;
		padding: 0 8px;
	}

	.Button--icon-small {
		width: 36px;
		height: 36px;
	}

	.Button--add-items {

	}

	.Button:focus {
		outline: 0;
	}

	.Button--white {
		border: 1px solid #B7B7B7;
		border-radius: 5px;
		color: #6D6E70;
		text-shadow: 0 -1px 1px #FFFFFF;
		background: #fefefe;
		background: linear-gradient(to bottom, #FEFEFE 0%,#EDEDED 100%);
		filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
		box-shadow: 0 1px 0 rgba(0, 0, 0, 0.05), inset 0 1px 0 rgba(255, 255, 255, 0.8);
	}

	.Button--white:hover {
		background: linear-gradient(to bottom, #EDEDED 0%,#EDEDED 100%);
		filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
		text-shadow: none;
	}

	.Button--danger {
		border: 1px solid #900000;
		border-radius: 5px;
		color: #FFF;
		text-shadow: 0 -1px 1px #FF515F;
		background: #CC2835;
		background: linear-gradient(to bottom, #FF515F 0%,#D63E4A 100%);
		filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
	}

	.Button--danger:hover {
		background: linear-gradient(to bottom, #D63E4A 0%,#900000 100%);
		filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
		text-shadow: none;
	}

	.Button--success {
		border: 1px solid #537B41;
		border-radius: 5px;
		color: #FFF;
		text-shadow: 0 -1px 1px #66B452;
		background: #66B452;
		background: linear-gradient(to bottom, #7DDE65 0%,#66B452 100%);
		filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
	}

	.Button--success:hover {
		background: linear-gradient(to bottom, #66B452 0%,#537B41 100%);
		filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
		text-shadow: none;
	}

	.Button--s {
		line-height: 16px;
		padding: 4px 8px;
	}

	.Button--blue {
		background-color: #31B2FF;
		border: 0;
		color: #FFF;
		text-align: center;
		box-sizing: border-box;
	}

	.Button--wrn {
		background-color: #FD5C5C;
		color: #FFF;
	}

	.Button--grey {
		background-color: #DDD;
		color: #484848;
	}

	.Button--borderless {
		border: 0;
	}	

	.Button--no-padding {
		padding: 0;
	}

	.Button--transparent {
		background-color: transparent;
		border: 0;
	}

	.Button--center {
		margin: 0 auto;
	}

	.Button--login-fb {
		margin-top: 32px;
	}

	.Button--back {
		margin-top: 16px;
	}

	@media (max-width: 450px){
		.Button--add-items {
			box-sizing: border-box;
			float: none;
			margin: 1.5em 0;
			text-align: center;
			width: 100%;
		}
	}

</style>
<template>
	<button v-on:click="handleClick" v-if="!href">
		<slot></slot>
	</button>

	<a :href="href" v-else>
		<slot></slot>
	</a>
</template>
<script>
	export default {
		props: ['href'],
		methods : {
			handleClick: function(event){
				this.$emit('click', event);
			}
		}
	}
</script>
