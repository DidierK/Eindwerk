<style>

    .Popover {
        position: absolute;
        /*top: 0;
        left: 1000px;*/
        z-index: 1;
    }

    .Popover--user-actions {
        top: 50px;
        right: 16px;
    }

    .Popover--categories {
        top: 50px;
        right: 133px;
    }

    .Popover--categories ul > li,
    .Popover--user-actions ul > li {
        border-bottom: 1px solid #DDD;
        padding: 8px 16px;
        min-width: 160px;
    }

      .Popover--categories ul > li:hover,
    .Popover--user-actions ul > li:hover {
        background-color: #F5F5F5;
    }


    .Popover--user-actions a,
    .Popover--categories a {
        color: #000;
    }

    .Popover--default {
        padding: 16px;
    }

    .Popover-inner {
       background-color: #fff;
   }

   @media screen and (min-width: 640px) {
    .Popover {       
    
    }
}

</style>
<template>
    <div v-if="showPopover">
        <div class="Popover-inner">
            <slot></slot>
        </div>
    </div>
</template>

<script>
    export default {
        data: function() {
            return {
                reference: '',
                showPopover: false
            }
        },
        mounted() {
            // Will only toggle if its reference gets clicked, that's why only one popover will toggle always
            this.reference.addEventListener("click", this.doToggle); 
            // Handle document click
            document.addEventListener("click", this.handleDocumentClick);   
        },
        methods: {
            doToggle() {
                // Literally: This value is NOT this value, so the opposite if boolean (= toggle)
                this.showPopover = !this.showPopover;
            },
            handleDocumentClick(e) {
                if (!this.reference.contains(e.target)){
                    this.showPopover = false;
                } 
            }
        }
    }
</script>
