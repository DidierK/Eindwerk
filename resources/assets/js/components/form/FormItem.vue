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
