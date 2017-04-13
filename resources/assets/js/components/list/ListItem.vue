<style>
.list__item--nav {
		display: inline-block;
		margin-top: 13px;
		margin-left: 32px;
		padding-right: 0;
		padding-left: 0;
	}
</style>
<template>
    <li class="list__item">
        <slot></slot>
    </li>
</template>
<script>
    export default {
        mounted() {
            console.log('Component ready.')
        }
    }
</script>
