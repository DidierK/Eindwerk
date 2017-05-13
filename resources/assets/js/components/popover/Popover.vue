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
        <div class="Popover-inner">
            <slot></slot>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['show', 'reference'],
        mounted () {
            
        },
        methods: {
            doToggle() {
                this.showPopover = !this.showPopover;
            }
        }
    }
</script>
