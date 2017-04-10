<template>
    <div v-show="showPopover" class="po popover--userActions" v-cloak>
        <div class="popover-inner">
            <ul>
                <li><a :href="'/user/' + userId + '/items'">Profiel</a></li>
                <li><a :href="'/user/' + userId + '/requests'">Verzoeken</a></li>
                <li><a :href="'/user/' + userId + '/transactions'">Transacties</a></li>
                <li><a href="/logout">Afmelden</a></li>
            </ul>       
        </div>
        <div class="popover-arrow"></div>
    </div>
</template>

<script>
    export default {
        data: function() { 
            return {
                showPopover: false
            }
        },
        props: ['show', 'userId'],
        mounted() {
            var that = this;
            $(window).resize(function() {
                that.positionPopover();
          });
        },
        watch: {
            show: function(val) {
                this.togglePopover(val);        
            }
        },
        methods: {
            togglePopover: function(val = false) {
                // If we get greenlight to show popover, put it on true
                if(val) {
                    this.positionPopover();
                    this.showPopover = true;
                } else {
                    this.showPopover = false;
                }
            },
            positionPopover: function() {
                var leftPos  = $(".pp")[0].getBoundingClientRect().left;
                var topPos  = $(".pp")[0].getBoundingClientRect().top;
                var elWidth = $(".popover--userActions").width() - 16;
                var elHeight = $(".pp").height();
                var poLeft = leftPos - $('.popover--userActions').width();
                
                // Position popover window
                $('.popover--userActions').css({ top: topPos + elHeight, left: leftPos - elWidth });

                // Position popover arrow
                $('.popover-arrow').css("left", $('.popover--userActions').width() - $(".pp").width() / 4);
            }
        }
    }
</script>
