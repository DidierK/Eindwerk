<template>
    <li class="list__item">
        <slot></slot>
    </li>
</template>
<script>
    export default {
        mounted() {
            console.log('Component ready.')
        }
    }
</script>
