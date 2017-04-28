<style>

    .Input {

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
        color: #737373;
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
