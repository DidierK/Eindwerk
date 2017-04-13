<style>
    .logo {
        /* TODO: To make more reusable split up all code in modifier classes */
        float: left;
        font-size: 18px;
        margin-top: 11px;
        margin-right: 32px;
    }
</style>
<template>
    <a class="logo" href="#">
        TravelShare
    </a>
</template>

<script>
    export default {
        mounted() {
            console.log('Component ready.')
        }
    }
</script>
