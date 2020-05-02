<template>
   <div >
       
        <q-toggle v-model="value" label="choose Style" style="margin:10px 40%"/>
        
   <CardLayout :style="{'display': value ?'none':'block'}" class="mt-20" :mycards='student' />
    <StudentList  :mycards='student' class="m-auto" :style="{'display': value ?'block':'none'}" />
     </div>
</template>


<script>

import CardLayout from "./CardLayout";
import StudentList from "./StudentList";
import {
    Quasar,
   QToggle
  } from 'quasar/dist/quasar.umd';


export default {
    components:
    {
    CardLayout,StudentList,QToggle
    },

     props:{
            students:{
                type:Array
            }
        },
        data(){ 
            return {
            student : this.students,
            value:false
        }
        },

}
</script>