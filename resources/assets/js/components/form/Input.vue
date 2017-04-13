<style>
    .input--borderless {
        border: 0;
    }

    .input--transparent {
        background-color: transparent;
    }

    .input--placeholder-white::placeholder {
        color: #FFF;
    }

    .input--search-box {
        width: 90%;
    }

</style>
<template>
    <input :placeholder="placeholder" :type="type" class="input" />
</template>
<script>
    export default {
        props: ["placeholder", "type", "value"],
        mounted() {
            console.log('Component ready.')
        }
    }
</script>
