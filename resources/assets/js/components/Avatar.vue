<template>
<li v-on:click="$emit('open')" class="avatar">
       <a href="#">
           <img class="pp" :src="avatar" />
       </a>
   </li>
</template>

<script>
    export default {
        data: function(){
            return {
                showUserActionPopover: false
            }
        },
        props: ['avatar']

    }
</script>
