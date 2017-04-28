<style>
	.List {
		padding-left: 0;
	}

    .List--inline > li {
        display: inline-block;
        padding: 0 16px;
    }

    .List--flex {
        display: flex;
    }

    .List--flex * {
        line-height: 0;
    }

    .List--vertically-centered {  
        align-items: center;
    }

    .List--nav {
        font-weight: 500;
        font-size: 14px;
        height: 60px; /* = height header. TODO: Dit zouden we beter via SASS moeten doen via $header-height ofzo. */
    }

    .List--my-items > li:first-child {
        border-top: 1px solid #DDD;
    }

    .List--my-items > li {
        border-bottom: 1px solid #DDD;
        padding: 16px 0;
    }

    .List--grid h3 {
        margin: 0;
    }
</style>
<template>
    <ul>
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
