<style>
    .FormItem {
        box-sizing: border-box;
        margin: 16px 0 24px;
    }

    .FormItem > input,
    .FormItem > button {
        display: inline-block;
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

    .FormItem__label p {
        color: #404e61;
        font-weight: 600;
        font-size: 14px;
        margin-bottom: .5em;
        text-transform: uppercase;
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
