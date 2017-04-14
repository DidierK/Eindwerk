<style>
  .avatar--header {
    border-radius: 50%;
    margin-top: -5px;
  }

</style>
<template>
<img class="avatar" :src="src" />
</template>
<script>
    export default {
        props: ['src'],
    }
</script>
