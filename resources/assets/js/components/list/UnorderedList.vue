<style>
	.list {
		padding-left: 0;
	}
</style>
<template>
    <ul class="list">
        <slot></slot>
    </ul>
</template>
<script>
    export default {
        mounted() {
            console.log('Component ready.')
        }
    }
</script>
