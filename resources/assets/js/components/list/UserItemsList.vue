<style>
  .UserItemsList {
    width: 100%;
  }

  .UserItemsListItem {
    box-sizing: border-box;
    margin: 0 4px;
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
  <div class="UserItemsList u--floatLeft">
    <a class="UserItemsListItem u--block u--linkClean" href="#">
      <v-card class="Card">
        <v-img class="UserItemsListItem__thumbnail" background="#"></v-img>
        <v-footer class="UserItemsListItem__footer u--flex">
          <div class="UserItemsListItem__user-info">
            <h3 class="UserItemsListItem__user-name u--noMargin">lol</h3>
            <span class="UserItemsListItem__user-address u--colorLight u--textSmall">
            3320 Hoegaarden
            </span>
          </div>
          <span class="UserItemsListItem__user-item-price u--marginLeft8px u--alignSelfCenter u--textMedium">€ 20.00</span> 
        </v-footer>
      </v-card>
    </a>
  </div>
</template>
<script>
  export default {
    mounted() {

    }
  }
</script>
