<style>
	.Avatar--default {
		border-radius: 5px;
	}

	@media (min-width: 480px){
		.EditProfileAvatar {
			float: right;
			margin-right: 32px !important;
			width: 30%;
		}
	}
</style>
<template>
	<img :src="src" />
</template>
<script>
	export default {
		props: ['src'],
	}
</script>
