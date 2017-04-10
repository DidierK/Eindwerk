<template>
    <ul class="nav-items-container transaction-nav list-inline half-width-items">
        <li><a v-on:click="activate" class="incoming-link active" href="#">Inkomend</a></li>
        <li><a v-on:click="activate" class="outgoing-link" href="#">Uitgaand</a></li>
    </ul>
</template>

<script>
    export default {
        mounted() {
            // TODO MAKE OUR LINKS LINK TO A JS FUNCTION WHICH DYNAMICALLY LOADS IN A VIEW
            // TODO: Check which url the loaded component is on and give that url active class
            // TODO MAKE THIS FUNCTIONALITY INTO A GENERAL TAB.VUE AND LET ALL OUR MENUS INHERIT FROM IT
            // TODO CREATE A FUNCTION IN THE MOUNTED METHOD THAT ALWAYS GIVES THE FIRST LIST ITEM THE ACTIVE CLASS
            // INSTEAD OF ADDING IT MANUALLY LIKE THIS, THIS WAY ITS EASIER TO MAKE THIS IN GENERALa
        },
        methods: {
            activate: function(event){

                // Prevent the link to execute, rather activate some content
                event.preventDefault();

                $(".user-nav a").removeClass("active");
                $(event.target).addClass("active");

                this.$emit('load', $(event.target));
            }
        }
    }
</script>
