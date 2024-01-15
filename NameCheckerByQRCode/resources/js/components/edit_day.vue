<template>
   <div>cdhw-</div>
</template>

<script>
import axios from 'axios';
    export default {
        props:['id','value','aa'],

        data(){
            return{
                dayData:[]
            }
        },
        methods:{
            getDayData(){
                axios.get()
            }
        },
        mounted(){
            console.log(this.id);
            
        },

    }


</script>
