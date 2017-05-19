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
		border: 0;
		border-radius: 2px;
		font-size: 14px;
		font-weight: 500;
		padding: 6px 8px;
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
		background-color: #FFF;
		color: #33bfea;
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
