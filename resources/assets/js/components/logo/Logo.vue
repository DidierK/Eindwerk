<style>
    .logo--logged-out {
        width: 100%;
        max-width: 420px;

    }
    .logo--header {
        /* TODO: To make more reusable split up all code in modifier classes */
        float: left;
        font-size: 14px;
        font-weight: 500;
        margin-top: 11px; 
        margin-right: 32px;
    }

    .logo__img {
        width: 100%;
        max-width: 420px;
    }

    .logo--small img {
        height: 48px;
    }
</style>
<template>
    <a class="logo link--white" href="/">
        <img class="logo" src="/images/mini_white_logo.png" />
    </a>
</template>

<script>
    export default {
        mounted() {
            console.log('Component ready.')
        }
    }
</script>
