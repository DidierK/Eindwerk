<style>

	a.button {
		display: inline-block;
	}

	a.button:hover {
		text-decoration: none;
	}

	a.button--block {
		display: block;
	}

	.button--link {
		text-decoration: underline;
	}

	.button--default {
		border-radius: 7.5px;
		font-weight: 600;
		padding: 9px 10px;
	}

	.button:focus {
		outline: 0;
	}

	.button--white {
		background-color: #FFF;
		color: #33bfea;
	}

	.button--blue {
		background-color: #3097D1;
		color: #FFF;
	}

	.button--full-width {
		width: 100%;
	}

	.button--borderless {
		border: 0;
	}	

	.button--no-padding {
		padding: 0;
	}

	.button--transparent {
		background-color: transparent;
	}

	.button--center {
		margin: 0 auto;
	}

	.button--login-fb {
		margin-top: 32px;
	}

	.button--back {
		margin-top: 16px;
	}

</style>
<template>
	<button v-on:click="handleClick" class="button" v-if="!href">
		<slot></slot>
	</button>

	<a :href="href" class="button" v-else>
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
