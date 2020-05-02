<template>
  <div class="cards">
    <Card
      v-for="(card, index) in cards"
      :key="card.name"
      :card="card"
      :is-current="index === 0"
      v-on="$listeners"
    />
  </div>
</template>

<script>
import Card from "./Card.vue";

export default {
  components: {
    Card
  },

  props: {
    cards: {
      type: Array,
      required: true
    }
  }

  ,
   methods: {
    handleCardAccepted(value) {
      console.log(value);
      this.$emit('cardAccepted',value);
    }}
};
</script>

<style lang="scss" scoped>
.cards {
  position: relative;
  display: flex;
  margin: auto;
  width: 300px;
}
</style>
