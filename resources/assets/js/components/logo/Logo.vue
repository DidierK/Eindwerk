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

    .Logo--header-main > img {
        width: 100%;
        height: 100%;
    }

    .Logo--header-main span{
        font-weight: 600;
    }

</style>
<template>
    <a href="/">
        <img src="/images/Logo_White.png" />
    </a>
</template>

<script>
    export default {
        mounted() {
            console.log('Component ready.')
        }
    }
</script>
