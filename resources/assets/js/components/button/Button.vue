<style>

	.Button {

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
    background: linear-gradient(to bottom, #fefefe 0%,#ededed 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
    box-shadow: 0 1px 0 rgba(0, 0, 0, 0.05), inset 0 1px 0 rgba(255, 255, 255, 0.8);
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
