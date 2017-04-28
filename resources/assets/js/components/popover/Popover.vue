<style>

    .Popover {
        padding: 16px;
        position: absolute;
        width: 100%;
        left: 0;
        z-index: 1;
    }

    .Popover-inner {
        background-color: #FFF;
        border: 1px solid #DDD;
    }

    @media screen and (min-width: 640px) {
        .Popover {       
            max-width: 192px;
        }
    }

</style>
<template>
    <div v-show="show">
        <div class="Popover-inner">
            <slot></slot>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['show']
    }
</script>
