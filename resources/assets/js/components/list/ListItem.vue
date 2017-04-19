<style>
  .list__item--nav {
    display: inline-block;
    margin-left: 32px;
    padding-right: 0;
    padding-left: 0;
  }

  .list-item--grid {
    position: relative;
  }

  .list-item--actions {
    position: absolute;
    top: 16px;
    right: 0;
  }

  @media screen and (min-width: 768px) {
    .list-item--info {
      width: 50%;
    }
  }

  @media screen and (max-width: 768px) {
    .list-item--info {
      margin-top: 48px;
      width: 100%;
    }
  }
</style>
<template>
  <li class="list__item">
    <slot></slot>
  </li>
</template>
<script>
  export default {
    mounted() {
      console.log('Component ready.')
    }
  }
</script>
