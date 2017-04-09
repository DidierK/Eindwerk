<template>
    <ul class="nav-items-container transaction-nav list-inline half-width-items">
        <li><a v-on:click="activate" class="active" href="#">Mijn spullen</a></li>
        <li><a v-on:click="activate" href="#">Instellingen</a></li>
    </ul>
</template>

<script>
    export default {
        mounted() {
            // TODO MAKE OUR LINKS LINK TO A JS FUNCTION WHICH DYNAMICALLY LOADS IN A VIEW
            // TODO: Check which url the loaded component is on and give that url active class
            // TODO MAKE THIS FUNCTIONALITY INTO A GENERAL TAB.VUE AND LET ALL OUR MENUS INHERIT FROM IT
        },
        methods: {
            activate: function(event){

                // Prevent the link to execute, rather activate some content
                event.preventDefault();

                $(".user-nav a").removeClass("active");
                $(event.target).addClass("active");
            }
        }
    }
</script>
