<style>
    .Search__field {
        border-radius: 2px;
        box-sizing: border-box;
        font-size: 14px;
        padding: 0 36px 0 8px;
    }

    .Search__button {
        line-height: 0;
        position: absolute;
    }

    .Search--header {
        width: 320px;
    }

    .Search__button--header {
        background-color: #C5DFE6;
        border-top-right-radius: 2px;
        border-bottom-right-radius: 2px;
        width: 32px;
    }

    .Search__button--header,
    .Search__button--sub-nav {
        top: 0;
        right: 0;
        line-height: 0;
    }


    .Search__field--header,
    .Search__button--header {
        border: 0;
        height: 32px;
    }

    .Search__field--sub-nav {
        border: 1px solid #C0C0C0;
        padding: 0 36px 0 8px;
    }

    .Search__button--sub-nav {
        background-color: transparent;
        border: 0;
        width: 36px;
    }

    .Search__field--sub-nav,
    .Search__button--sub-nav {
        height: 36px;
    }

</style>
<template>
    <div>     
        <slot></slot>
    </div>
</template>

<script>
    export default {
        mounted() {

        }
    }
</script>
