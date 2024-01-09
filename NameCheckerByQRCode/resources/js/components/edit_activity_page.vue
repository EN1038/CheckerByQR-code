

<template>
    <h5>{{ idActivity_setting = activity_setting.id }}</h5>
    <div v-for="day in activity_days_setting" :key="day">
        <span>{{ idDays = day.id }}</span>
    </div>
    {{ idActivity_setting }}
    {{ idDays }}
</template>

<script>
import axios from 'axios';
export default {
    props: ['activity_id'],
    data() {
        return {

            count: 0,
            activity_setting: [],
            activity_days_setting: [{}],
            idActivity_setting: 0,
            idDays: 0,
        };
    },
    mounted() {
        this.clickMe(),
        this.getActivitySetting()


    },
    methods: {
        clickMe() {
            this.count++
        },
        getActivitySetting() {
            axios.get('http://127.0.0.1:8000/api/activity-setting/' + this.activity_id).then((res) => {
                this.activity_setting = res.data;
                // console.log(this.activity_setting);

            },)

            axios.get('http://127.0.0.1:8000/api/activity_daychecker/' + this.activity_id).then((res) => {
                this.activity_days_setting = res.data;
                console.log(this.activity_days_setting);

                axios.get('http://127.0.0.1:8000/api/activity/round-checker-api/' + this.activity_id+'/'+this.idDays).then((res) => {
                this.activity_days_setting = res.data;
                console.log(this.activity_days_setting);

            },)
            },)
            
        },



    },
}

</script>
