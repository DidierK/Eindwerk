<style>

    .app-popover {
        padding: 16px;
        position: absolute;
        width: 100%;
        left: 0;
        z-index: 1;
    }

    .app-popover-inner {
        background-color: #FFF;
        border: 1px solid #DDD;
    }

    @media screen and (min-width: 640px) {
        .app-popover {       
            max-width: 192px;
        }
    }

</style>
<template>
    <div v-show="show" class="app-popover">
        <div class="app-popover-inner">
            <slot></slot>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['show']
    }
</script>
