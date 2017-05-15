<style>


</style>
<template>
<v-popover class="Popover Popover--categories" placement="bottom" :ref="reference">
        <slot></slot>     
    </v-popover>
</template>

<script>
    export default {
        data: function() {
            return {
                reference: ''
            }
        }

    }
</script>
