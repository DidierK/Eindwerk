<style>

.select--default {
	border: 1px solid #DDD;
    border-radius: 1px;
    color: #B7B7B7;
    font-size: 15px;
    font-weight: 500;
    height: 42px;
    padding: 0 8px;
}

</style>
<template>
    <select class="select select--default" :name="name">
        <slot></slot>
    </select>
</template>
<script>
    export default {
        props: ["label", "name"],
        mounted() {
            this.$parent.$data.label = this.label;
        }
    }
    
</script>