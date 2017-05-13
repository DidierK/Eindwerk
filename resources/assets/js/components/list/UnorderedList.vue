<style>
	.List {
		padding-left: 0;
	}

    .List--inline > li {
        display: inline-block;
        padding: 0 16px;
    }

    .List--nav {
        font-weight: 500;
        font-size: 14px;
        height: 60px; /* = height header. TODO: Dit zouden we beter via SASS moeten doen via $header-height ofzo. */
    }

    .List--my-items > li:first-child {
        border-top: 1px solid #DDD;
    }

    .List--my-items > li {
        border-bottom: 1px solid #DDD;
        padding: 16px 0;
    }

    .List--grid h3 {
        margin: 0;
    }


  .List--user-items {
    margin-top: 16px;
    width: 100%;
  }

  .List--user-items > .List__item {
    margin: 0 4px;
    width: 100%;
  }

  @media (min-width: 420px){
    .List--user-items > .List__item  {
      width: calc(50% - 8px);
    }
  }

  @media (min-width: 1200px){
    .List--user-items > .List__item {
      width: calc(33.33% - 8px);
    }
  }
</style>
<template>
    <ul>
        <slot></slot>
    </ul>
</template>
<script>
    export default {
        mounted() {
            console.log('Component ready.')
        }
    }
</script>
