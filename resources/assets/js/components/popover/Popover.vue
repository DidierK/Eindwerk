<style>

    .Popover {
        position: absolute;
        /*top: 0;
        left: 1000px;*/
        right: 0;
        bottom: 0;
        z-index: 1;
    }

    .Popover--default {
        padding: 16px;
    }

    .Popover-inner {
       background-color: #fff;
   }

   @media screen and (min-width: 640px) {
    .Popover {       
        max-width: 192px;
    }
}

</style>
<template>
    <div>
        <div class="Popover-inner" v-show="showPopover">
            <slot></slot>
            <slot name="reference"></slot>
        </div>
    </div>
</template>

<script>
    export default {
        data: function() {
            return {
                reference: '',
                showPopover: false
            }
        },
        props: ['show'],
        mounted() {
            // Will only toggle if its reference gets clicked, that's why only one popover will toggle always
            this.reference.addEventListener("click", this.doToggle);   
        },
        methods: {
            doToggle() {
                // Literally: This value is NOT this value, so the opposite if boolean (= toggle)
                this.showPopover = !this.showPopover;
            }
        }
    }
</script>
