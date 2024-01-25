<template>
   <div>{{ activity_data }}</div>
   <!-- <div>{{ activity_data.activity_name }}</div>
   <div>{{ activity_data.user_id }}</div>
   <div>{{ activity_data.activity_description }}</div>
   <div>{{ activity_data.status }}</div> -->

   <div class="row">
    <div class="col mb-3">
        <span class="btn btn-success">วัน</span>
        <div v-for="date in date_data">
            <div>{{ date.id }}</div>
            <div>{{ date.form_name }}</div>
            <div>{{ date.time_start }}</div>
            <div>{{ date.time_expried }}</div>
            <div>{{ date.round_mode }}</div>
            <label>เช็คเป็นรอบ</label>
            <input type="radio" class="form-radio">

            <label>เช็คทั้งวัน</label>
            <input type="radio" class="form-radio" ref="aa">
            
            <div v-for="round in date.round">
                <div>{{ round.id }}</div>
                
                <div>{{ round.rounde_name }}</div>
                <div>{{ round.rounde_checker_time_start }}</div>
                <div>{{ round.rounde_checker_time_expried }}</div>
            </div>  
            </div>
        </div>
    </div>
   
</template>

<!-- <script setup>
  import { ref, onMounted } from "vue";

  // IMPORTANT: Variable should be named the same as the ref.
  const aa = ref(null);

  onMounted(() => {
    const radio_id = aa.value;
</script> -->


<script>
import { ref, onMounted } from "vue";
import axios from 'axios';

const aa = ref(null);

  onMounted(() => {
    const radio_id = aa.value.clientHeight;
  });
    export default {
        props:['activity_id'],
        data(){
            return {
                date_data:[],
                activity_data:[]

            }
        },

        mounted() {
            this.getDayCheckerData()
            
            
        },
        methods: {
        async getDayCheckerData(){
            axios.get('http://127.0.0.1:8000/api/activity/all-setting/'+this.activity_id).then((res)=>{
                this.date_data = res.data.date_data;
                this.activity_data = res.data.activity_data;

                console.log(this.date_data);
            });
        }
        },
    }
</script>
