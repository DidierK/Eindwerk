<style>
  .avatar--header {
    border-radius: 50%;
  }

</style>
<template>
<img class="avatar--header" :src="src" />
</template>
<script>
    export default {
        props: ['src'],
    }
</script>
