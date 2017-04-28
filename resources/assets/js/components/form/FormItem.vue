<style>
    .FormItem {
        margin-bottom: 1.5em;
    }

    .FormItem__label {
        display: block;
        color: #484848;
        font-size: 16px;
        font-weight: 500;
        padding-bottom: .4em;
    }
</style>
<template>
    <p>
    <label class="FormItem__label" :for="label" v-if="label">{{ label }}</label>
        <slot></slot>
    </p>
</template>

<script>
    export default {
        data: function(){
        	return {
        		label: ''
        	}
        }
    }
</script>
