<style>
  .List__item--nav {
    display: inline-block;
    margin-left: 32px;
    padding-right: 0;
    padding-left: 0;
  }

  .List__item--grid {
    position: relative;
  }

  .List__item--actions {
    position: absolute;
    top: 16px;
    right: 0;
  }

  @media screen and (min-width: 768px) {
    .List__item--info {
      width: 100%;
    }

    .List--user-items {
      margin-top: 0;
      width: calc(100% - 266px); /* Actually could do SASS vars for the minus so they change dynamically */
    }
  }

  @media screen and (max-width: 768px) {
    .List__item--info {
      margin-top: 48px;
      width: 100%;
    }
  }
</style>
<template>
  <li>
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
