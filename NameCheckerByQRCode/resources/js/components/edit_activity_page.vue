

<template>
    <button v-on:click='clickMe'> click</button>
    <h1>{{ activity_setting }}</h1>
</template>

<script>
import axios from 'axios';
export default {
    props: ['activity_id'],
    data() {
        return {

            count: 0,
            activity_setting: [],
            activity_days_setting: [],
        };
    },
    mounted() {
        this.clickMe(),
            this.getActivitySetting(),
            this.getActivityDays()
    },
    methods: {
        clickMe() {
            this.count++
        },
        getActivitySetting() {
            axios.get('http://127.0.0.1:8000/api/activity-setting/' + this.activity_id).then((res) => {
                this.activity_setting = res.data;
                // console.log(this.activity_setting);

            },);
        },
        getActivityDays() {
            axios.get('http://127.0.0.1:8000/api/activity_daychecker/' + this.activity_id).then((res) => {
                this.activity_setting = res.data;
                console.log(this.activity_setting);

            },);
        },


    },
}

</script>
