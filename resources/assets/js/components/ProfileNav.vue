<template>
    <ul class="nav-items-container transaction-nav list-inline half-width-items">
        <li v-on:click="activate"><a class="active" href="#">Mijn spullen</a></li>
        <li v-on:click="activate"><a href="#">Instellingen</a></li>
    </ul>
</template>

<script>
    export default {
        mounted() {
            // TODO MAKE OUR LINKS LINK TO A JS FUNCTION WHICH DYNAMICALLY LOADS IN A VIEW
            // TODO: Check which url the loaded component is on and give that url active class
        },
        methods: {
            activate: function(event){
                $(".user-nav a").removeClass("active");
                $(event.target).addClass("active");
            }
        }
    }
</script>
