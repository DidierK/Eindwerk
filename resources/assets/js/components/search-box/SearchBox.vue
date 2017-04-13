<style>
    .search-box {
        padding: 5px 0px 5px 10px;
    }

    .search-box--white {
        border: 1px solid #FFF;
        color: #FFF;
    }

    .search-box--float-left {
        float: left;
    }

    .search-box--full-width {
        width: 100%;
    }

    .search-box--header {
        margin-top: 6px;
    }

    .search-box--rounded {
        border-radius: 7.5px;
    }

    @media screen and (min-width: 768px) {
        .search-box--header {
            width: 320px;
        }
    }   
</style>
<template>
<div class="search-box">     
        <slot></slot>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component ready.')
        }
    }
</script>
