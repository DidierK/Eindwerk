<style>
    .Logo--logged-out {
        width: 100%;
        max-width: 420px;

    }
    
    .Logo__img {
        width: 100%;
        max-width: 420px;
    }

    .Logo--small img {
        height: 48px;
    }
</style>
<template>
    <a href="/">
        <img src="/images/mini_white_logo.png" />
    </a>
</template>

<script>
    export default {
        mounted() {
            console.log('Component ready.')
        }
    }
</script>
