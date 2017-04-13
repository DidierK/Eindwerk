<template>
    <form class="form">
        <slot></slot>
    </form>
</template>

<script>
    export default {
        mounted() {
            console.log('Component ready.')
        }
    }
</script>
