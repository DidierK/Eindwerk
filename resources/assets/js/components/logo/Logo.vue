<style>
    .logo--logged-out {
        width: 100%;
        max-width: 420px;

    }
    .logo--header {
        /* TODO: To make more reusable split up all code in modifier classes */
        float: left;
        font-size: 18px;
        margin-top: 13px; /* This should be equal to height header - 13px */
        margin-right: 32px;
    }

    .logo__img {
        width: 100%;
        max-width: 420px;
    }
</style>
<template>
    <a class="logo link--white" href="/">
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
