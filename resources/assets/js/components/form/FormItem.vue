<style>
    .form-item {
        margin-bottom: 1.5em;
    }

    .form-item__label {
        display: block;
        color: #484848;
        font-size: 16px;
        font-weight: 500;
        padding-bottom: .4em;
    }
</style>
<template>
    <p class="form-item">
    <label class="form-item__label" :for="label" v-if="label">{{ label }}</label>
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
