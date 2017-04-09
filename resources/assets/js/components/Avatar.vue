<template>
   <li class="avatar">
       <a href="#">
           <img class="pp" :src="avatar" />
       </a>
   </li>
</template>

<script>
    export default {
        props: ['avatar']

    }
</script>
