<style>
    .FormItem {
        margin: 16px 0;
    }

    .FormItem--search {
        
        margin: 0;
        
    }

    .FormItem__label {
        display: block;
        color: #000;
        font-size: 14px;
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
