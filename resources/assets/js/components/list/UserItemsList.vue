<style>
  .UserItemsList {
    position: relative;
    min-height: 250px;
    width: 100%;
  }

  .UserItemsListItem {
    box-sizing: border-box;
    padding: 0 4px;
    width: 100%;
  }

  .UserItemsListItem__thumbnail {
    background-position: center top;
    background-repeat: no-repeat;
    background-size: cover;
    margin-bottom: 8px;
    width: 100%;
    height: 250px;
  }

  .UserItemsListItem__footer {
    border-top: 1px solid #DDD;
    padding: 8px;
  }

  .UserItemsListItem__user-info {
    border-right: 1px solid #DDD;
    flex-basis: 75%;
  }

  .UserItemsList__Spinner {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 32px;
    height: 32px;
  }

  @media screen and (min-width: 440px) {
    .UserItemsListItem {
      width: 50%;
    }
  }

  @media screen and (min-width: 768px) {
    .UserItemsList {
      width: calc(100% - 266px); /* Actually could do SASS vars for the minus so they change dynamically */
    }
  }

  @media screen and (min-width: 1200px) {
    .UserItemsListItem {
      width: 33.33%;
    }
  }

</style>
<template>
  <div class="UserItemsList u--floatLeft u--flex u--flexWrap">
    <p v-if="results.length === 0 && !showSpinner">
      Er zijn spijtig genoeg geen resultaten gevonden.
    </p>
    <v-spinner class="UserItemsList__Spinner" v-if="showSpinner"></v-spinner>
    <slot v-for="result in results" v-else>
      <a class="UserItemsListItem u--block u--linkClean" :href="'/user-item/' + result.user_item_id">
        <v-card class="Card">
          <v-img class="UserItemsListItem__thumbnail" :background="'/uploads/user-items/' + result.thumbnail"></v-img>
          <v-footer class="UserItemsListItem__footer u--flex">
            <div class="UserItemsListItem__user-info">
              <h3 class="UserItemsListItem__user-name u--noMargin">{{ result.name }}</h3>
              <span class="UserItemsListItem__user-address u--colorLight u--textSmall">
                {{ result.zip + " " + result.locality }}
              </span>
            </div>
            <span class="UserItemsListItem__user-item-price u--marginLeft8px u--alignSelfCenter u--textMedium">€{{ result.price }}</span> 
          </v-footer>
        </v-card>
      </a>
    </slot>
  </div>
</template>
<script>
  export default {
    props: ["itemUrl"],
    data: function(){
      return {
        showSpinner: false,
        results: []
      }
    },
    mounted() {
      this.getUserItemsByItemUrl(this.itemUrl);
    },
    methods: {
      getUserItemsByItemUrl: function(url){
        this.showSpinner = true;
        
        axios.get('/api/item/' + url + '/user-items', url).then((response) => {
          this.results = response.data;
          this.showSpinner = false;
        });    
      }
    }
  }
</script>
