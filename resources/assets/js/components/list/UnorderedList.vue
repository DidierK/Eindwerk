<style>
	.list {
		padding-left: 0;
	}

    .list--inline > li {
        display: inline-block;
        padding: 0 16px;
    }

    .list--flex {
        display: flex;
    }

    .list--flex * {
        line-height: 0;
    }

    .list--vertically-centered {  
        align-items: center;
    }

    .list--nav {
        height: 48px; /* = height header. TODO: Dit zouden we beter via SASS moeten doen via $header-height ofzo. */
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
