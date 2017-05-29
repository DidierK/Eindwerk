<style>
	.Link:hover {
		text-decoration: none;
	}

	.Link--default {
		color: #18B4DB;
		text-decoration: underline;
	}

	.Link--default:hover {
		text-decoration: none;
	}

	.Link--inverse {
		color: #18B4DB;
		text-decoration: none;
	}

	.Link--inverse:hover {
		text-decoration: underline;
	}

	.Link--white {
		color: #FFF;
	}

	.Link--white:hover {
		color: #DDD;
	}

	.Link--black {
		color: #636b6f;
		font-size: 12px;
	}

	.Link--UserActions {
		border-bottom: 1px solid #DDDDDD;
		color: #636b6f;
		display: block;
	}
</style>
<template>
	<a :href="link">
		<slot></slot>
	</a>
</template>

<script>
	export default {
		props: ["link"]
	}
</script>
