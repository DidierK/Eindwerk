<style>

.select--default {
	border: 2px solid #DDD;
    border-radius: 1px;
    color: #737373;
    font-size: 15px;
    font-weight: 300;
    padding: 12px 8px;
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