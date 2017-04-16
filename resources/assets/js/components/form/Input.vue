<style>

    .input {

    }

    .input--text-default,
    .input--textarea-default {
        border: 1px solid #DDD;
        border-radius: 1px;
        font-size: 14px;
        font-weight: 300;
        padding: 12px 8px;
    }

    .input--text-default::placeholder,
    .input--textarea-default::placeholder {
        color: #ADADAD;
    }

    .input:focus {
        outline: 0;
    }

    .input--borderless {
        border: 0;
    }

    .input--transparent {
        background-color: transparent;
    }

    .input--placeholder-white::placeholder {
        color: #FFF;
    }

    .input--search-box {
        width: 90%;
    }

    .input--full-width {
        box-sizing: border-box; /* Because the width 100% and padding otherwise overflows parent div */
        width: 100%;
    }

    .input--price {
        margin-right: 8px;
    }

</style>
<template>
    <!-- TODO: We should put form__item div in the form__item template together with the label because we can't put label next to input because of a syntax error, we should then emit the label from here to the form item, like we did with the labels of the tabs -->
    <input :id="label" :placeholder="placeholder" :type="type" class="input" :value="value" v-if="type !== 'textarea'" />
    <textarea :id="label" :placeholder="placeholder" :type="type" class="input" v-else></textarea>
</template>
<script>
    export default {
        props: ["label", "placeholder", "type", "value"],
        mounted() {
            this.$parent.$data.label = this.label;
        }
    }
</script>
