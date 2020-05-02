<template>
  <div id="layout">
		<CardStack
			:cards="visibleCards"
			@cardAccepted="handleCardAccepted"
			@cardRejected="handleCardRejected"
			@cardSkipped="handleCardSkipped"
			@hideCard="removeCardFromDeck"
		/>
  </div>
</template>

<script>
import CardStack from "./CardStack";

export default {
  
  components: {
   CardStack
  },

  props: {
    mycards: {
      type: Array,
      required: true
    }
  }
,
  

  data() {
    return {
      visibleCards: JSON.parse(JSON.stringify(this.mycards)),
      
    };
  },

  methods: {
    handleCardAccepted(value) {
      this.mycards.forEach(element => {
        if(element.name==value)
        element.present=true;
      });
    },
    handleCardRejected(value) {
     
    },
    handleCardSkipped() {
      console.log("handleCardSkipped");
    },
    removeCardFromDeck() {
      this.visibleCards.shift();
    }
  }
};
</script>

<style lang="scss">
@import "./style/cardStyle.scss";

#layout {
  font-family: "Avenir", Helvetica, Arial, sans-serif;
  text-align: center;
}
</style>
