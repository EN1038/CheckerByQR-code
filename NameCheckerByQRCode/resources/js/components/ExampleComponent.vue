<template>
   
</template>

<script>
import axios from 'axios';
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
        async getDayCheckerData(){
            await axios.get('')
        }
        },
    }
</script>
