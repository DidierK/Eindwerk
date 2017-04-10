<template>
<ul class="nav-items-container transaction-nav list-inline half-width-items">
    <slot></slot>
    <li> {{ activeLink }}</li>
    </ul>
</template>

<script>
    export default {
        props: ['activeLink']
      
    }
</script>
