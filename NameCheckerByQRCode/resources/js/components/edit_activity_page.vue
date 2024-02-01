<template>
    <!-- <div>{{ activity_data }}</div>
    <div>{{ activity_data.activity_name }}</div>
    <div>{{ activity_data.user_id }}</div>
    <div>{{ activity_data.activity_description }}</div>
    <div>{{ activity_data.status }}</div>
    <div>{{ activity_settin.list_of_name_mode_id }}</div>

    <div class="row">
        <div class="col mb-3">
            <span class="btn btn-success">วัน</span>
            <div v-for="date in date_data">
                <div>{{ date.id }}</div>
                <div>{{ date.date }}</div>
                <div>{{ date.form_name }}</div>
                <div>{{ date.time_start }}</div>
                <div>{{ date.time_expried }}</div>
                <div>{{ date.round_mode }}</div>
                <div v-for="round in date.round">
                    <div>{{ round.id }}</div>
                    <div>{{ round.rounde_name }}</div>
                    <div>{{ round.rounde_checker_time_start }}</div>
                    <div>{{ round.rounde_checker_time_expried }}</div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="text-center mt-5">
        <h1 class="text-greenlight fw-bold"><i class="fa-solid fa-gear fa-spin"></i> ตั้งค่ากิจกรรม</h1>
        <span class="fw-light fs-2">ชื่อกิจกรรม : {{ activity_data.activity_name }}</span>
    </div>

    <div class="container">

        <div class="row">
            <div class="col">

                <div class="mb-3 mt-4">
                    <label class="label-form fs-5">รายละเอียดกิจกรรม <i class="fa-regular fa-message"></i></label>
                    <textarea class="form-control rounded-4" name="activity[detail]" id="" cols="30"
                        rows="5">{{ activity_data.activity_description }}</textarea>
                </div>

                <div class="d-flex flex-column mx-3 mx-lg-5 " id="prOutSide">
                    <div class="text-start">
                        <a class="fw-bold fs-3 text-decoration-none mt-5 mb-1 mb-lg-3">มีข้อมูลรายชื่อหรือไม่ <i
                                class="fa-solid fa-circle-question"></i></a>
                    </div>

                    <div
                        class="col d-flex flex-column flex-lg-row align-items-start align-items-lg-center justify-content-center justify-content-lg-start pt-3">

                        <div class="form-check col-12 col-lg-3 ps-4 ps-lg-5">
                            <input class="form-check-input fs-5 chooseModeTypeDatasOS" type="radio" v-model="selectedOption"
                                value="1" ref="haveList">
                            <label class="form-check-label fs-5" for="radiosOSHaveData">
                                มีรายชื่อ
                            </label>
                        </div>
                        <div class="form-check col-12 col-lg-3">
                            <input class="form-check-input fs-5 chooseModeTypeDatasOS" type="radio" v-model="selectedOption"
                                value="2" ref="no_haveList">
                            <label class="form-check-label fs-5" for="radiosOSnoHaveData">
                                ไม่มีรายชื่อ
                            </label>
                        </div>
                    </div>
                    <div v-if="selectedOption === '1'" class="col my-4 " id="contentHaveData">
                        <span class="fw-bold fs-5">ข้อมูลมีรายชื่อ</span>
                        <i class="fa-solid fa-question fa-beat-fade fs-5 fw-bold show-imageHelper" id="imgHelpOS"></i>
                        <div class="my-2 text-center d-none" id="img-helperOS">
                            <img src="" class="border border-danger">
                        </div>

                        <div class="my-3">
                            <label for="formFileOS" class="form-label">โปรดเลือกไฟล์ Excel จากในเครื่อง</label>
                            <input class="form-control w-75 mb-2 ms-4 formFileList" type="file" id="" name="excel" value=""
                                accept=".xlsx,xls">
                            <div id="divFileOS" class="ms-4"></div>
                            <p>ตัวอย่างรูปแบบไฟล์Excel : <a href="#"> กดเพื่อดาวโหลดไฟล์ตัวอย่าง </a></p>
                        </div>
                    </div>
                    <div v-if="selectedOption === '2'" class="col my-4 " id="contentNoHaveData">
                        <span class="fw-bold fs-5">ไม่มีข้อมูลมีรายชื่อ</span>
                        <div class="form-check ms-3 mt-2">

                            <p class="fs-4">กรอกชื่อและนามสกุล</p>
                        </div>

                    </div>
                    <div class="col mt-3 mb-4">
                        <span class="fw-bold fs-4 text-green">วันจัดกิจกรรม <i
                                class="fa-regular fa-calendar-days"></i></span>
                    </div>

                </div>
                <div id="inputContainer">

                    <div v-for="item in date_data" :key="item.id"
                        :class="{ 'border-bottom border-success border-3 mb-4': item.id > 0 }">
                        <div class="d-flex flex-row justify-content-between align-items-center mb-3">
                            <input class="fs-4 fw-bold input-title-form" :id="'formDate' + item.id"
                                :value="'วันที่ : ' + (date_data.indexOf(item) + 1)">
                            <i class="fs-3 fw-bold text-decoration-none fa-solid fa-calendar-xmark iconClose"
                                :id="'iconClose' + item.id" @click="deleteDate(item.id)"></i>
                        </div>
                        <div
                            class="d-flex flex-column flex-lg-row justify-content-start justify-content-lg-center align-items-start align-items-lg-center mb-3">
                            <div class="col-12  col-lg-6 ">
                                <label class="form-label fs-5">วัน/เดือน/ปี</label>
                                <input class="form-control datepicker getDate datepicker_costom_success" type="date"
                                    name="activity[date_add][date_input0][date]" :id="'date_input' + item.id"
                                    placeholder="โปรดเลือกวันที่ก่อนจะใส่ข้อมูลช่องอื่น" autocomplete="off"
                                    :value="dateInputs[item.id] || item.date" @input="handleDateInput(item.id, $event)"
                                    :min="getMinDate()">
                                <div v-if="valueError && item.id === errorInputId && errorInputType === 'time_date'"
                                    v-html="errorHTML" class="text-danger text-center fs-6 fw-bold mt-2"></div>
                                {{ auto_validateDate(item.id, item.date) }}
                            </div>
                            <div class="col-12 col-lg-3 px-0 px-lg-3">
                                <label class="form-label fs-5">เวลาเริ่ม</label>
                                <input class="form-control get_IdInputTime revese-fake-disable text-center" type="time"
                                    name="activity[date_add][date_input0][time][time_start]"
                                    :id="'timeStart_input' + item.id" :data-id="item.id"
                                    :value="selectedTime[item.id] ? selectedTime[item.id].start : item.time_start"
                                    @input="checkTime">
                            </div>
                            <div class="col-12 col-lg-3 px-0 px-lg-3">
                                <label class="form-label fs-5">เวลาจบ</label>
                                <input class="form-control get_IdInputTime revese-fake-disable text-center" type="time"
                                    name="activity[date_add][date_input0][time][time_expried]"
                                    :id="'timeExpried_input' + item.id" :data-id="item.id"
                                    :value="selectedTime[item.id] ? selectedTime[item.id].expried : item.time_expried"
                                    @input="checkTime">

                            </div>
                        </div>
                        <div class="d-flex flex-column mb-3">
                            <div class="d-flex flex-column flex-lg-row" id="div_SetCheckNamex0">
                                <label class="form-label fs-5">ตั้งค่าการเช็คชื่อ : </label>
                                <div class="form-check ms-4">
                                    <input class="form-check-input get_IdsetCheckName" type="radio" value="1"
                                        :name="'activity' + item.id" :id="'setCheckName_day' + item.id" :data-id="item.id"
                                        @click="show_divCheckName">
                                    <label class="form-check-label fs-5" for="setCheckNameI0">เช็คชื่อทั้งวัน</label>
                                </div>
                                <div class="form-check ms-4">
                                    <input class="form-check-input get_IdsetCheckName" type="radio" value="2"
                                        :name="'activity' + item.id" :id="'setCheckName_round' + item.id" :data-id="item.id"
                                        @click="show_divCheckName">
                                    <label class="form-check-label fs-5" for="setCheckNameII0">เช็คชื่อเป็นรอบ</label>
                                </div>
                                {{ auto_click_check(item.round_mode, item.id) }}
                            </div>
                            <div :id="'CheckName_allDay' + item.id"
                                class="d-flex justify-content-center align-items-center div_CheckName p-5">
                                <h1 class="fs-3 fw-bold text-center">ระบบจะมีการเช็คชื่อตั้งแต่เวลาเริ่มจนเวลาจบ</h1>
                            </div>
                            <div :id="'CheckName_RoundDay' + item.id"
                                class="d-flex flex-column div_CheckName p-0 p-lg-2 d-none">
                                <div
                                    class="d-flex flex-column-reverse flex-lg-row justify-content-start justify-content-lg-around align-itens-start align-items-lg-center w-100">
                                    <div class="col-12 col-lg-7 d-flex flex-column flex-lg-row">
                                        <label class="form-label w-100 w-lg-25 fs-5" for="selectSetRoundCheck0">จำนวนรอบ :
                                        </label>
                                        <select
                                            class="form-select h-50 w-100 w-lg-75 me-0 me-lg-3 get_IdselectRound revese-fake-disable text-center"
                                            :id="'selectSetRoundCheck' + item.id" :data-id="item.id"
                                            @change="showSelectRound">
                                            <option class="text-center" disabled hidden value="0">เลือกจำนวนรอบ</option>
                                            <option class="text-center" value="1">จำนวน 1 รอบ</option>
                                            <option class="text-center" value="2">จำนวน 2 รอบ</option>
                                            <option class="text-center" value="3">จำนวน 3 รอบ</option>
                                            <option class="text-center" value="4">จำนวน 4 รอบ</option>
                                            <option class="text-center" value="5">จำนวน 5 รอบ</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-lg-5 d-flex flex-column ps-0 ps-lg-5">
                                        <label class="form-label fs-5 me-4 me-lg-0"
                                            for="selectTimeCheck0">ระยะเวลาที่เช็ค</label>
                                        <select class="form-select w-100 w-lg-75 getId_selectTimeCheck revese-fake-disable text-center"
                                            :id="'selectTimeCheck' + item.id" :data-id="item.id"
                                            @change="effect_inputduration">
                                            <option class="text-center" disabled hidden>เลือกเวลา</option>
                                            <option class="text-center" value="15">15 นาที</option>
                                            <option class="text-center" value="30">30 นาที</option>
                                            <option class="text-center" value="45">45 นาที</option>
                                            <option class="text-center" value="60">60 นาที</option>
                                            <option class="text-center" value="90">90 นาที</option>
                                            <option class="text-center" value="120">120 นาที</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col d-flex flex-column my-2">
                                    <div :id="'divShowTimeToUser' + item.id">
                                        <div v-for="(round, index) in item.round" :key="index">
                                            <!-- <div>{{ round.id }}</div>
                                        <div>{{ round.rounde_name }}</div>
                                        <div>{{ round.rounde_checker_time_start }}</div>
                                        <div>{{ round.rounde_checker_time_expried }}</div>
                                        <div>Total Rounds: {{ item.round.length }}</div> -->
                                            <div class="d-flex flex-column flex-lg-row justify-content-center justify-content-lg-start align-items-start align-items-lg-center"
                                                id="div_row0">
                                                <label class="col-12 col-lg-2 form-label fw-bold text-green fs-6 fs-lg-5"
                                                    for="dynamicSelect0" id="dynamicLabel0">การเช็คชื่อรอบที่ {{ index + 1
                                                    }}</label>
                                                <select
                                                    class="col form-select mb-3 mx-0 mx-lg-2 h-25 dynamicSelects d-flex justify-content-start revese-fake-disable"
                                                    :id="'dynamicSelect' + item.id + index">
                                                    <option :value="round.rounde_checker_time_start">หลังเวลา : {{
                                                        formatTime(round.rounde_checker_time_start) }} นาที</option>
                                                </select>
                                                <div class="col-12 col-lg-6  d-flex my-2 ms-0 ms-lg-3 justify-content-center"
                                                    :id="'divSpace' + item.id">
                                                    <input
                                                        class=" my-1 my-lg-4 bg-disable w-100 w-lg-75 border-0 fs-6 fs-lg-5 text-lg-center"
                                                        disabled="" :id="'Boxinput' + item.id"
                                                        :value="'จะเริ่มเช็คชื่อเมื่อเวลา : ' + formatTime(round.rounde_checker_time_start) + ' - ' + formatTimesub(round.rounde_checker_time_expried)">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-none" :id="'divShowTimeToUserII' + item.id">
                                        <div v-for="(selectedValue, index) in selectedValues" :key="index">
                                            <div :id="'div_row'+item.id" class="d-flex flex-column flex-lg-row justify-content-center justify-content-lg-start align-items-start align-items-lg-center">
                                            <label class="col-12 col-lg-2 form-label fw-bold text-green fs-6 fs-lg-5"
                                                for="dynamicSelect0" id="dynamicLabel0">การเช็คชื่อรอบที่ {{ index + 1}}</label>
                                            <select
                                            :class="'col form-select mb-3 mx-0 mx-lg-2 h-25 dynamicSelects d-flex justify-content-start fake-disable text-center'"
                                                :id="'dynamicSelect' + item.id + index" :data-id="item.id" :data-id2="index" @change="changValuehide" >
                                                <option v-for="option in filteredOptions(index)" :key="option.id" :value="option.id === '0' ? '0' : option.time" :hidden="option.id === '0'">
                                                    {{ option.id === '0' ? option.time : 'หลังเวลา : ' + option.time + ' นาที' }}
                                                </option>
                                            </select>
                                            <div class="col-12 col-lg-6  d-flex my-2 ms-0 ms-lg-3 justify-content-center"
                                                :id="'divSpace' + item.id">
                                                <input
                                                    class=" my-1 my-lg-4 bg-disable w-100 w-lg-75 border-0 fs-6 fs-lg-5 text-lg-center"
                                                    disabled :id="'Boxinput' + item.id + index" >
                
                                                    <input type="text" class="d-none" :id="'timeSelect'+item.id+index" value="xxx">
                                                    <input type="text" class="d-none" :id="'timeDuration'+item.id+index" value="zzz">
                                                    <input type="text" class="d-none" :id="'timeEnd'+item.id+index" value="zzxxz">
                                            </div>
                                            </div>
                                        </div>


                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div
                    class="d-flex flex-column flex-lg-row justify-content-center justify-content-lg-start aling-items-start aling-items-lg-center mb-5">
                    <div class="col d-flex flex-row-reverse">
                        <button type="submit" class="btn-submit-setting " id="submit"><i
                                class="fa-solid fa-cloud-arrow-up"></i> บันทึกการตั้งค่า</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>
 
<script>

import axios from 'axios';
export default {
    props: ['activity_id'],
    data() {
        return {
            date_data: [],
            activity_data: [],
            activity_setting: [],
            items: [],
            counter: 0,
            selectedOption: null,
            dateInputs: {},
            time_startInputs: {},
            time_expriedInputs: {},
            valueError: false,
            errorInputId: '',
            errorInputType: null,
            errorHTML: '',
            selectedTime: {},
            optionsArray: [{ id: null, time: null}],
            selectedValues: null,
            selectOptionsRound: null,
            selectedValuesOfRound: [],
        }
    },

    mounted() {
        this.getDayCheckerData()
    },
    methods: {
        getDayCheckerData() {
            axios.get('http://127.0.0.1:8000/api/activity/all-setting/' + this.activity_id).then((res) => {
                this.date_data = res.data.date_data;
                this.activity_data = res.data.activity_data;
                this.activity_setting = res.data.activity_setting;

                this.auto_click_list(this.activity_setting.list_of_name_mode_id);
            });
        },
        addInput() {

            this.items.push({ id: this.counter });
            this.counter++;
            // เพิ่มโค้ดที่เกี่ยวข้องกับการใส่ข้อมูลใน items ตามที่คุณต้องการ
        },
        deleteDate(date_id) {
            console.log(date_id);

            axios.get('/api/activity/check-people-register/' + this.activity_id + '/' + date_id).then((res) => {
                console.log(res.data);
                var register_data = res.data

                if (register_data.length) {
                    this.$swal({
                        title: "ไม่สามารถลบได้เนื่องจากมีการเช็คชื่อแล้ว !",
                        text: "หากลบแล้วจะหายไปหมดเลยนะ !",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",

                        confirmButtonText: "ใช่, ตกลง"
                    })

                } else {
                    this.$swal({
                        title: "ต้องการลบใช่หรือไม่ !",
                        text: "หากลบแล้วจะหายไปหมดเลยนะ !",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        cancelButtonText: "ยกเลิก",
                        confirmButtonText: "ใช่, ตกลง"
                    }).then((result) => {


                        if (result.isConfirmed) {
                            this.$swal.fire({
                                title: "Deleted!",
                                text: "Your file has been deleted.",
                                icon: "success"
                            });

                            axios.post('/api/activity/date/delete/' + date_id, {
                                date_id: date_id
                            });

                            this.date_data = this.date_data.filter(item => item.id !== date_id);

                        }


                    })
                }
            });





            // เพิ่มโค้ดที่เกี่ยวข้องกับการลบ Input ตาม itemId

        },

        auto_click_list(value) {
            if (value) {
                if (value === '1') {
                    this.$refs.haveList.checked = true;
                    this.selectedOption = '1';
                } else if (value === '2') {
                    this.$refs.no_haveList.checked = true;
                    this.selectedOption = '2';
                } else {
                    console.log('error , funtion auto_click_list : value != 1 and 2')
                }
            } else {
                console.log('error, funtion auto_click_list : No have value')
            }
        },

        show_divCheckName(event) {
            if (event) {
                this.$nextTick(() => {
                    const dataId = event.target.dataset.id;
                    const div_Alldays = document.getElementById('CheckName_allDay' + dataId);
                    const div_Rounddays = document.getElementById('CheckName_RoundDay' + dataId);
                    if (event.target.value === '1') {
                        div_Alldays.classList.remove('d-none');
                        div_Rounddays.classList.add('d-none');
                    } else if (event.target.value === '2') {
                        div_Alldays.classList.add('d-none');
                        div_Rounddays.classList.remove('d-none');
                    } else {
                        console.log('error , funtion show_divCheckName : value != 1 and 2')
                    }
                });
            } else {
                console.log('error, funtion show_divCheckName: No value provided');
            }
        },

        auto_click_check(value, id) {
            if (value) {
                this.$nextTick(() => {
                    const checkName_days = document.getElementById('setCheckName_day' + id);
                    const checkName_rounds = document.getElementById('setCheckName_round' + id);
                    const div_Alldays = document.getElementById('CheckName_allDay' + id);
                    const div_Rounddays = document.getElementById('CheckName_RoundDay' + id);
                    if (value === '1') {
                        checkName_days.checked = true;
                        div_Alldays.classList.remove('d-none');
                        div_Rounddays.classList.add('d-none');
                    } else if (value === '2') {
                        checkName_rounds.checked = true;
                        div_Alldays.classList.add('d-none');
                        div_Rounddays.classList.remove('d-none');
                    } else {
                        console.log('error , funtion auto_click_check : value != 1 and 2');
                    }
                });

            } else {
                console.log('error, function auto_click_check: No value provided');
            }
        },

        getMinDate() {
            const currentDate = new Date();
            const year = currentDate.getFullYear();
            const month = String(currentDate.getMonth() + 1).padStart(2, '0'); // เพิ่ม 1 เนื่องจาก getMonth เริ่มต้นที่ 0
            const day = String(currentDate.getDate()).padStart(2, '0');
            return `${year}-${month}-${day}`;
        },

        handleDateInput(itemId, event) {
            const inputValue = event.target.value;
            const get_valueDates = document.getElementById('date_input' + itemId);
            if (Object.values(this.dateInputs).includes(inputValue)) {
                get_valueDates.classList.add('datepicker_costom_incorrect');
                get_valueDates.classList.remove('datepicker_costom_success');
                this.dateInputs[itemId] = '';
                this.valueError = true;
                this.errorInputId = itemId;
                this.errorInputType = 'time_date';
                this.errorHTML = '<p>มีวันที่ ที่เลือกไปแล้ว</p>';
            } else {
                get_valueDates.classList.remove('datepicker_costom_incorrect');
                get_valueDates.classList.add('datepicker_costom_success');
                this.dateInputs[itemId] = inputValue;
                this.valueError = false;
                this.errorInputId = null;
                this.errorHTML = '';
            }
        },

        auto_validateDate(itemId, itemDate) {
            if (itemDate) {
                this.$nextTick(() => {
                    const get_valueDates = document.getElementById('date_input' + itemId);
                    this.dateInputs[itemId] = get_valueDates.value;
                });

            } else {
                console.log('error, function auto_validateDate: No value provided');
            }
        },
        checkTime(event) {
            const id = event.target.dataset.id;
            const time_start = document.getElementById('timeStart_input' + id);
            const time_expried = document.getElementById('timeExpried_input' + id);
            const divShowTimeToUsers = document.getElementById('divShowTimeToUser' + id);
            const div_row = document.querySelectorAll(`[id='div_row${id}']`);
            const selectSetRoundCheck = document.getElementById('selectSetRoundCheck' + id);
            
            if (time_start.value < time_expried.value) {
                console.log('เวลาถูกต้อง');
                this.valueError = false;
                event.target.classList.remove('fake-disable');
                event.target.classList.add('revese-fake-disable');
                this.selectedTime = { ...this.selectedTime, [id]: { start: time_start.value, expried: time_expried.value } };
                if (divShowTimeToUsers) {
                    var selectAndLabels = divShowTimeToUsers.querySelectorAll('select, label, input, div');
                    // วนลูปผ่าน select และ label แล้วลบทุกตัว
                    selectAndLabels.forEach(element => {
                        element.remove(); // ลบ select และ label ทั้งหมดออกจาก DOM
                    });
                    selectSetRoundCheck.value = "0";
                    selectSetRoundCheck.classList.remove('revese-fake-disable');
                    selectSetRoundCheck.classList.add('fake-disable');
                } 
                if (div_row) {
                    div_row.forEach(div => {
                    const selectsInDiv = div.querySelectorAll("select");
                    const inputInDiv = div.querySelectorAll("input");
                        selectsInDiv.forEach(select => {
                            select.value = '0';
                            select.classList.remove('revese-fake-disable');
                            select.classList.add('fake-disable');
                        });
                        inputInDiv.forEach(input => {
                            input.value = '';
                        });
                    });

                    selectSetRoundCheck.value = "0";
                    selectSetRoundCheck.classList.remove('revese-fake-disable');
                    selectSetRoundCheck.classList.add('fake-disable');
                }
            } else if (time_expried.value < time_start.value) {
                console.log('เวลาผิด');
                event.target.value = '';
                event.target.classList.remove('revese-fake-disable');
                event.target.classList.add('fake-disable');
            }
        },

        showSelectRound(event) {
            const id = event.target.dataset.id;
            let divShowTimeToUsers = document.getElementById('divShowTimeToUser' + id);
            let divShowTimeToUsersII = document.getElementById('divShowTimeToUserII' + id);

            if (event) {
                event.target.classList.remove('fake-disable');
                event.target.classList.add('revese-fake-disable');
                divShowTimeToUsers.classList.add('d-none');
                divShowTimeToUsersII.classList.remove('d-none');

                const value = event.target.value;
                const intValue = parseInt(value, 10);
                this.selectedValues = Array(intValue).fill(null);
                this.createDetailOption(id);
            } else {
                console.log('error,function showSelectRound')
            }
        },

        effect_inputduration(event) {
            const id = event.target.dataset.id;
            let divShowTimeToUsers = document.getElementById('divShowTimeToUser' + id);
            let divShowTimeToUsersII = document.getElementById('divShowTimeToUserII' + id);
            let selectSetRoundCheck = document.getElementById('selectSetRoundCheck' + id);
            // ลบ select ที่มี id เป็น dynamicSelect ทิ้งทั้งหมด
            if (divShowTimeToUsers) {
                var selectAndLabels = divShowTimeToUsers.querySelectorAll('select, label, input, div');

                selectAndLabels.forEach(element => {
                    element.remove();
                });

                selectSetRoundCheck.value = "0";
                selectSetRoundCheck.classList.remove('revese-fake-disable');
                selectSetRoundCheck.classList.add('fake-disable');
            } 
            if (divShowTimeToUsersII) {
                var selectAndLabelsII = divShowTimeToUsersII.querySelectorAll('select, label, input, div');
                selectAndLabelsII.forEach(element => {
                    element.remove();
                });
                selectSetRoundCheck.value = "0";
                selectSetRoundCheck.classList.remove('revese-fake-disable');
                selectSetRoundCheck.classList.add('fake-disable');
            }
        },

        formatTime(time) {
            const [hours, minutes] = time.split(':');
            return `${hours}:${minutes}`;
        },
        formatTimesub(time) {
            const [hours, minutes] = time.split(':');
            return `${hours}:${minutes}`;
        },

        createDetailOption(id) {
            console.log(id)
            let time_check = document.getElementById('selectTimeCheck' + id).value;
            let time_start = document.getElementById('timeStart_input' + id);
            let time_end = document.getElementById('timeExpried_input' + id);

            let [startHour, startMinute] = time_start.value.split(':').map(Number);
            let [endHour, endMinute] = time_end.value.split(':').map(Number);

            let startTotalMinutes = startHour * 60 + startMinute; // เวลาเริ่มต้นในรูปแบบนาที
            let endTotalMinutes = endHour * 60 + endMinute; // เวลาสิ้นสุดในรูปแบบนาที

            let timeDifferenceMinutes = Math.abs(endTotalMinutes - startTotalMinutes); // ละยะห่างของเวลาในนาที
            let valueIdselectRound = document.getElementById('selectSetRoundCheck' + id).value;
            for (var x = 0; x <= (valueIdselectRound - 1); x++) {
                if (time_check === '15' || time_check === '30' || time_check === '45' || time_check === '60') {
                    const intervalOneHours = 60;
                    const newTimesArray = [];

                    for (let z = 0; z <= timeDifferenceMinutes; z += intervalOneHours) {
                        let [hours, minutes] = time_start.value.split(':').map(Number);
                        let totalMinutes = hours * 60 + minutes;
                        totalMinutes += z;
                        hours = Math.floor(totalMinutes / 60) % 24;
                        minutes = totalMinutes % 60;

                        let newTime = `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}`;

                        // เก็บ newTime ในอาเรย์
                        newTimesArray.push(newTime);
                    }

                    // ในที่นี้, เราให้ optionsArray เป็น newTimesArray
                    this.optionsArray = newTimesArray.map((newTime, index) => {
                        return {
                            id: index === 0 ? "0" : `${index+1}`,
                            time: index === 0 ? "โปรดเลือกเวลา" : newTime,
                        };
                    });

                } else if (time_check === '90' || time_check === '120') {
                    const intervalOneHours = 120;
                    const newTimesArray = [];

                    for (let z = 0; z <= timeDifferenceMinutes; z += intervalOneHours) {
                        let [hours, minutes] = time_start.value.split(':').map(Number);
                        let totalMinutes = hours * 60 + minutes;
                        totalMinutes += z;
                        hours = Math.floor(totalMinutes / 60) % 24;
                        minutes = totalMinutes % 60;

                        let newTime = `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}`;

                        // เก็บ newTime ในอาเรย์
                        newTimesArray.push(newTime);
                    }

                    // ในที่นี้, เราให้ optionsArray เป็น newTimesArray
                    this.optionsArray = newTimesArray.map((newTime, index) => {
                        return {
                            id: index === 0 ? "0" : `${index+1}`,
                            time: index === 0 ? "โปรดเลือกเวลา" : newTime,
                        };
                    });
                }
            }
        },
        changValuehide(event){
            const id = event.target.dataset.id;
            const idsub = event.target.dataset.id2;
            const valueEvent = event.target.value;
            const timeSelect = document.getElementById('timeSelect'+id+idsub);
            const timeDuration = document.getElementById('timeDuration'+id+idsub);
            const timeEndofDate = document.getElementById('timeExpried_input' +id);
            const selectTimeCheck = document.getElementById('selectTimeCheck' + id);
            const timeEndofRound = document.getElementById('timeEnd'+id+idsub);
            
            event.target.classList.remove('fake-disable')
            event.target.classList.add('revese-fake-disable')

            timeSelect.value = valueEvent;

            var splitTime = valueEvent.split(":");
            var hours = parseInt(splitTime[0]);
            var mins = parseInt(splitTime[1]);

            mins += selectTimeCheck.value;

            hours += Math.floor(mins / 60);
            mins = mins % 60;

            hours = hours % 24;

            var resultHours = hours < 10 ? "0" + hours : hours;
            var resultMins = mins < 10 ? "0" + mins : mins;
            timeDuration.value = resultHours + ":" + resultMins;

            if(timeEndofRound){
                var splitTime = timeSelect.value.split(":");
                var hours = parseInt(splitTime[0]);
                var mins = parseInt(splitTime[1]);

                mins -= 1;
                        
                // หากน้อยกว่า 0 ให้ลบชั่วโมงและปรับนาทีให้เป็นบวก
                if (mins < 0) {
                    hours--;
                     mins += 60;
                }

                // หากชั่วโมงเป็นค่าลบ ให้กลับไปเป็น 23
                if (hours < 0) {
                     hours = 23;
                }

                // กลับไปเป็นรูปแบบเวลา
                var resultHours = hours < 10 ? "0" + hours : hours;
                var resultMins = mins < 10 ? "0" + mins : mins;
                var idsubInt = parseInt(idsub);
                var idcal = idsubInt-1;
                const before_timeEndofRound = document.getElementById('timeEnd'+id+idcal);
                if(before_timeEndofRound){
                    var idsubInt = parseInt(idsub);
                    var idcal = idsubInt+1;
                    const after_timeEndofRound = document.getElementById('timeEnd'+id+idcal);
                    const boxInput = document.getElementById('Boxinput' + id + idsub);
                    if(after_timeEndofRound){
                        before_timeEndofRound.value = resultHours + ":" + resultMins;
                        boxInput.value = 'จะเริ่มเช็คชื่อเมื่อเวลา : '+timeSelect.value+' - '+timeDuration.value;
                    }else{
                        before_timeEndofRound.value = resultHours + ":" + resultMins;
                        timeEndofRound.value = timeEndofDate.value;
                        boxInput.value = 'จะเริ่มเช็คชื่อเมื่อเวลา : '+timeSelect.value+' - '+timeDuration.value;
                    }
                    
                }else{
                    timeEndofRound.value = timeEndofDate.value;
                    const boxInput = document.getElementById('Boxinput' + id + idsub);
                    boxInput.value = 'จะเริ่มเช็คชื่อเมื่อเวลา : '+timeSelect.value+' - '+timeDuration.value;
                }

                const selectedOption = event.target.value;
                // ตรวจสอบว่าค่าที่เลือกมีอยู่ใน selectedValues หรือไม่
                if (this.selectedValuesOfRound.includes(selectedOption)) {
                    // หากมีให้แสดงข้อความเตือนหรือป้องกันการเลือกได้ตามต้องการ
                    alert('คุณเลือกค่าที่ซ้ำกัน กรุณาเลือกค่าอื่น');
                    event.target.value = '0';
                    event.target.classList.remove('revese-fake-disable')
                    event.target.classList.add('fake-disable')
                    const editInputBox = document.getElementById('Boxinput'+id+idsub);
                    editInputBox.value = '';
                } else {
                    // หากไม่มีให้เพิ่มค่าที่เลือกเข้าไปใน selectedValues
                    this.selectedValuesOfRound[idsub] = selectedOption;
                }
                
            }
        },
        filteredOptions(index) {
            // กรอง options ที่มีค่าซ้ำกันออกจาก optionsArray
            return this.optionsArray.filter(option => !this.selectedValuesOfRound.some(value => value === option.id));
        },

    },

}
</script>