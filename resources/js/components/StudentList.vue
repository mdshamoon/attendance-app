<template>
  <div class="q-pa-md" style="max-width: 350px">
    
   
    <q-toolbar class="bg-primary text-white shadow-2">
      <q-toolbar-title>Students</q-toolbar-title>
    </q-toolbar>
     <q-scroll-area style="height: 320px; ">

    <q-list bordered>
      <q-item v-for="card in cards" :key="card.name" class="q-my-sm" clickable v-ripple>
        <q-item-section avatar>
          <q-avatar color="primary" text-color="white">
            A
          </q-avatar>
        </q-item-section>

        <q-item-section>
          <q-item-label>{{ card.name }}</q-item-label>
          <q-item-label caption lines="1">{{ card.email }}</q-item-label>
        </q-item-section>

        <q-item-section side>
          <q-checkbox keep-color v-model="card.present"  color="cyan" />
        </q-item-section>
      </q-item>

     

     
    </q-list>
    </q-scroll-area>
  </div>
  
</template>

<script>
import {
    Quasar,
    QList,
    QItem,
    QIcon,
     QCheckbox,
    QItemSection,
    QItemLabel,
    QScrollArea,
    QInfiniteScroll
  } from 'quasar/dist/quasar.umd';

  console.log(QList);
  
  
  const contacts = [ {
  id: 1,
  name: 'Ruddy Jedrzej',
  email: 'rjedrzej0@discuz.net',
  letter: 'R',
  present:true
}, {
  id: 2,
  name: 'Mallorie Alessandrini',
  email: 'malessandrini1@marketwatch.com',
  letter: 'M',
  present:true
}, {
  id: 3,
  name: 'Elisabetta Wicklen',
  email: 'ewicklen2@microsoft.com',
  letter: 'E',
  present:true
}, {
  id: 4,
  name: 'Seka Fawdrey',
  email: 'sfawdrey3@wired.com',
  letter: 'S',
  present:true
} ];
const offline = [ {
  id: 5,
  name: 'Brunhilde Panswick',
  email: 'bpanswick4@csmonitor.com',
  avatar: 'avatar2.jpg'
}, {
  id: 6,
  name: 'Winfield Stapforth',
  email: 'wstapforth5@pcworld.com',
  avatar: 'avatar6.jpg'
} ];
export default {
  name:'quasarr',

  props: {
    mycards: {
      type: Array,
      required: true
    }
  },
   components: {
      QList,
      QItem,
      QItemSection,
      QItemLabel,
       QCheckbox,
       QInfiniteScroll,
      QIcon,
      QScrollArea,
    },
  data () {
    return {
      contacts,
      cards: this.mycards,
      offline,
      cyan: true
    }
  }
}

</script>
