<template>
   <div>
    <button @click="test()">Count : {{ count }}</button>
   </div>
</template>

<script>
import axios from 'axios';
    export default {
        data() {
    return {
      count: 0
    };
  },
        mounted() {
            this.test();
        },
        methods: {
            test(){
                
                this.count++;
            }
        },
    }
    
</script>
