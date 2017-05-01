<style>

    .Input--radio {
        display: none;
    }

    .Input--search {
        font-size: 14px;
        border: 1px solid #C0C0C0;
        border-radius: 2px;
        box-sizing: border-box;
        height: 36px;
        padding: 0 36px 0 8px;
    }

    .Input--search-header {
        font-size: 14px;
        border-radius: 2px;
        box-sizing: border-box;
        height: 32px;
        padding: 0 36px 0 8px;
    }

    .Input--search::placeholder,
    .Input--search-header::placeholder {
        color: #C0C0C0;
    }

    .Input--radio + span {
        background-color: #FFF;
        border: 1px solid #C0C0C0;
        border-radius: 50%;
        position: absolute;
        top: 2px;
        left: 0;
        width: 12px;
        height: 12px;
    }

    .Input--radio:checked + span::after {
        background-color: #18B4DB;
        border-radius: 50%;
        content: '';
        position: absolute;
        top: 2px;
        left: 2px;
        width: 8px;
        height: 8px;
    }

    .Control {
        cursor: pointer;
    }

    .Control--radio {
        margin-bottom: 8px;
        padding-left: 32px;
        position: relative;
    }

    .Input--text-default,
    .Input--textarea-default {
        border: 2px solid #DDD;
        border-radius: 1px;
        font-size: 15px;
        font-weight: 400;
        padding: 12px 8px;
    }

    .Input--text-default::placeholder,
    .Input--textarea-default::placeholder {
        color: #B7B7B7;
    }

    .Input--textarea-default {
        min-height: 100px;
    }

    .Input:focus {
        outline: 0;
    }

    .Input--borderless {
        border: 0;
    }

    .Input--transparent {
        background-color: transparent;
    }

    .Input--placeholder-white::placeholder {
        color: #FFF;
    }

    .Input--search-box {
        width: 90%;
    }

    .Input--price {
        margin-right: 8px;
    }

</style>
<template>
    <!-- TODO: We should put form__item div in the form__item template together with the label because we can't put label next to input because of a syntax error, we should then emit the label from here to the form item, like we did with the labels of the tabs -->
    <input :id="label" :placeholder="placeholder" :type="type" :value="value" :name="name" v-if="type !== 'textarea'" />
    <textarea :id="label" :placeholder="placeholder" :type="type" :name="name" v-else></textarea>
</template>
<script>
    export default {
        props: ["label", "placeholder", "type", "value", "name"],
        mounted() {
            this.$parent.$data.label = this.label;
        }
    }
</script>
