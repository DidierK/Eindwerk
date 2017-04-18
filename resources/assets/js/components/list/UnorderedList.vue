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
        font-weight: 500;
        font-size: 14px;
        height: 60px; /* = height header. TODO: Dit zouden we beter via SASS moeten doen via $header-height ofzo. */
    }

    .list--my-items > li:first-child {
        border-top: 1px solid #DDD;
    }

    .list--my-items > li {
        border-bottom: 1px solid #DDD;
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
