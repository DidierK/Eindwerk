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
	border-radius: 2px;
	font-size: 14px;
	font-weight: 500;
	padding: 12px 16px;
}

.button--default:hover {
	background-color: #22A8CA;

}

.button--float-right {
	float: right;
}

.button:focus {
	outline: 0;
}

.button--white {
	background-color: #FFF;
	color: #33bfea;
}

.button--blue {
	background-color: #18B4DB;
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
