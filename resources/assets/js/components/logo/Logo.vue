<style>
    .Logo--logged-out {
        width: 100%;
        max-width: 420px;

    }
    
    .Logo__img {
        width: 100%;
        max-width: 420px;
        width:30px;
    }

    .Logo--small img {
        height: 48px;
    }

    .Logo--header-main {
        padding: 0 16px;
        text-decoration:none;
        font-weight:400;
    }

    .Logo--header-main span{
        font-weight: 600;
    }

    .Logo--header-main img{
        width:30px;
        margin-right: 5px;
    }
    
</style>
<template>
    <a href="/">
        <img src="/images/Logo_White.png" />
        Travel<span>Share</span>
    </a>
</template>

<script>
    export default {
        mounted() {
            console.log('Component ready.')
        }
    }
</script>
