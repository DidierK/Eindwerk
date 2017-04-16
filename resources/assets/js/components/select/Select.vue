<style>

</style>
<template>
    <select>
        <slot></slot>
    </select>
</template>
<script>
    export default {
        props: ["label"],
        mounted() {
            this.$parent.$data.label = this.label;
        }
    }
    
</script>