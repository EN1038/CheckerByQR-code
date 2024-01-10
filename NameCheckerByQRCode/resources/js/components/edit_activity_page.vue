

<template>
    <div class="text-center mt-5">
        <h1 class="text-greenlight fw-bold"><i class="fa-solid fa-gear fa-spin"></i> ตั้งค่ากิจกรรม</h1>
        <span class="fw-light fs-2">ชื่อกิจกรรม : </span>
        <div class="container">

            <div class="row">
                <div class="col">
                    <!-- activity detail    -->
                    
                        <div class="mb-3 mt-4">
                            <label class="label-form fs-5">รายละเอียดกิจกรรม <i class="fa-regular fa-message"></i></label>
                            <textarea class="form-control rounded-4" name="activity[detail]" id="" cols="30" rows="5"></textarea>
                        </div>



                 </div>       
                 </div>       
                 </div>       
        </div>

    <h5>รหัสกิจกรรม : {{ activity_setting }}</h5>
    <div v-if="activity_days_setting">
        <div v-for="day in activity_days_setting" :key="day">
            <p v-if="day">{{ get_dayId(day) }}รหัสวันที่ : {{ day.id }}</p>
            <p :id="'round' + day.id"></p>
        </div>

    </div>
</template>

<script>
import axios from 'axios';



export default {
    props: ['activity_id'],
    data() {
        return {
            activity_title: '',
            activity_setting: [],
            activity_days_setting: [],
            activity_rounds_setting: [],

        };
    },
    mounted() {

        this.getActivitySetting()


    },

    methods: {

        getActivitySetting() {
            axios.get('http://127.0.0.1:8000/api/activity-data/' + this.activity_id).then((res) => {
                this.activity_title = res.data;
                // console.log(this.activity_setting);

            },)

            axios.get('http://127.0.0.1:8000/api/activity-setting/' + this.activity_id).then((res) => {
                this.activity_setting = res.data;
                // console.log(this.activity_setting);

            },)



            axios.get('http://127.0.0.1:8000/api/activity_daychecker/' + this.activity_id).then((res) => {
                this.activity_days_setting = res.data;
                console.log(this.activity_days_setting);


            },)

        },
        get_dayId(newId) {
            if (newId && newId.id && !this.activity_rounds_setting.length) {
                var dayId = newId.id;
                var day_activity_id = newId.activity_id;
                axios.get('http://127.0.0.1:8000/api/activity/round-checker-api/' + day_activity_id + "/" + dayId).then((res) => {
                    var datas = res.data;
                    console.log('ของวันที่ ' + newId.id);
                    this.activity_rounds_setting = datas;
                    console.log(this.activity_rounds_setting);
                    var get_round = document.getElementById('round' + newId.id);
                    get_round.textContent = JSON.stringify(datas);
                }).catch((error) => {
                    console.error("Error fetching data:", error);
                });
            }
        },





    },
}

</script>
