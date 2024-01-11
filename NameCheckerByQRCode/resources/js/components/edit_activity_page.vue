<style>

</style>

<template>
    <div class="text-center mt-5">
        <h1 class="text-greenlight fw-bold"><i class="fa-solid fa-gear fa-spin"></i> ตั้งค่ากิจกรรม</h1>
        <span class="fw-light fs-2">ชื่อกิจกรรม : {{ activity_title.activity_name }}</span>
              
        <div class="container">
    
    <div class="row">
        <div class="col">
            <!-- activity detail -->
                <div class="mb-3 mt-4 text-start">
                    <label class="label-form fs-5">รายละเอียดกิจกรรม <i class="fa-regular fa-message"></i></label>
                    <textarea class="form-control rounded-4" name="activity[detail]" id="" cols="30" rows="5"></textarea>
                </div>
                

                

                <div class="d-flex flex-column mx-3 mx-lg-5 " id="prOutSide">
                    <!-- <a class="fw-bold fs-3 text-decoration-none">บุคคลภายนอก</a> -->
                    <div class="text-start">
                        <a class="fw-bold fs-3 text-decoration-none mt-5 mb-1 mb-lg-3">มีข้อมูลรายชื่อหรือไม่ <i class="fa-solid fa-circle-question"></i></a>
                    </div>
                      
                <div class="col d-flex flex-column flex-lg-row align-items-start align-items-lg-center justify-content-center justify-content-lg-start pt-3">
                    <div class="form-check col-12 col-lg-3 ps-4 ps-lg-5 text-start">
                        <input class="form-check-input fs-5 " type="radio" name="activity[setting][have_list_of_name]" ref="radiosOSHaveData" value="1" @click="chooseModeTypeDatasOS($refs.radiosOSHaveData)">
                        <label class="form-check-label fs-5 " for="radiosOS">
                          มีรายชื่อ
                        </label>
                      </div>
                      <div class="form-check col-12 col-lg-3 text-start">
                        <input class="form-check-input fs-5 " type="radio" name="activity[setting][have_list_of_name]" ref="radiosOSnoHaveData" value="2" @click="chooseModeTypeDatasOS($refs.radiosOSnoHaveData)">
                        <label class="form-check-label fs-5" for="radiosOS">
                          ไม่มีรายชื่อ
                        </label>
                      </div>
                      
                      <p>{{ autoclick_list_of_name(activity_setting.list_of_name_mode_id) }}</p>
                </div>
                <div class="col my-4 d-none text-start" ref="div_HavedataOS">
                    <span class="fw-bold fs-5">ข้อมูลมีรายชื่อ</span>
                    <i class="fa-solid fa-question fa-beat-fade fs-5 fw-bold show-imageHelper" id="imgHelpOS"></i>
                    <div class="my-2 text-center d-none" id="img-helperOS">
                        <img src="" class="border border-danger">
                    </div>
                      
                    <div class="my-3" >
                        <label for="formFileOS" class="form-label">โปรดเลือกไฟล์ Excel จากในเครื่อง</label>
                        <input class="form-control w-75 mb-2 ms-4 formFileList" type="file" id="" name="excel" value="" accept=".xlsx,xls">
                        <div id="divFileOS" class="ms-4"></div>
                        <p>ตัวอย่างรูปแบบไฟล์Excel : <a href="#"> กดเพื่อดาวโหลดไฟล์ตัวอย่าง </a></p>
                    </div>
                </div>
                <div class="col my-4 d-none" ref="noDiv_HavedataOS">
                    <span class="fw-bold fs-5 ">ไม่มีข้อมูลรายชื่อ</span>
                    
                </div>
                <div class="col mt-3 mb-4 text-start">
                        <span class="fw-bold fs-4 text-green">วันจัดกิจกรรม <i class="fa-regular fa-calendar-days"></i></span>
                </div>
            <div id="inputContainer">
                        <!-- javacreate -->
            </div>
            <div class="d-flex flex-column flex-lg-row justify-content-center justify-content-lg-start aling-items-start aling-items-lg-center mb-5">
                <div class="col-12 col-lg d-flex">
                    <a class="scrollButton" ref="btnNewInput_GetId" @click="createDays()"><i class="fa-solid fa-calendar-plus"></i> สร้างวันเช็คชื่อ</a>
                </div>
                <div class="col d-flex flex-row-reverse">
                    <button type="submit" class="btn-submit-setting " id="submit"><i class="fa-solid fa-cloud-arrow-up"></i> บันทึกการตั้งค่า</button>
                </div>
            </div>      
            
        </div>
    </div>
</div>
    <div class="d-flex flex-column mb-4 text-start">
        <div class="d-flex flex-row justify-content-between align-items-center mb-3 ">
            <input class="fs-4 fw-bold input-title-form" type="text" name="" value="วันที่ : ">
            <i class="fs-3 fw-bold text-decoration-none fa-solid fa-calendar-xmark iconClose"></i>
        </div>
        <div class="d-flex flex-column flex-lg-row justify-content-start justify-content-lg-center align-items-start align-items-lg-center mb-3">
            <div class="col-12 col-lg-6">
                <label class="form-label fs-5">วัน/เดือน/ปี</label>
                <input class="form-control datepicker getDate datepicker_costom_incorrect" type="text" name="activity[date_add][date_input0][date]" id="date_input0" placeholder="โปรดเลือกวันที่ก่อนจะใส่ข้อมูลช่องอื่น" autocomplete="off">
            </div>
            <div class="col-12 col-lg-3 px-0 px-lg-3">
                <label class="form-label fs-5">เวลาเริ่ม</label>
                <input class="form-control get_IdInputTime fake-disable" disabled="" type="time" name="activity[date_add][date_input0][time][time_start]" id="timeStart_input0">
            </div>
            <div class="col-12 col-lg-3 px-0 px-lg-3">
                <label class="form-label fs-5">เวลาจบ</label>
                <input class="form-control get_IdInputTime fake-disable" disabled="" type="time" name="activity[date_add][date_input0][time][time_expried]" id="timeEnd_input0">
            </div>
        </div>
        <div class="d-flex flex-column flex-lg-row">
            <label class="form-label fs-5">ตั้งค่าการเช็คชื่อ : </label>
            <div class="form-check ms-4">
                <input class="form-check-input fake-disable" type="radio" value="1" name="activity[date_add][date_input0][round_setting]" ref="setCheckNameAllday" @click="changModeCheckName($refs.setCheckNameAllday)">
                <label class="form-check-label fs-5" for="setCheckNameI0">เช็คชื่อทั้งวัน</label>
            </div>
            <div class="form-check ms-4">
                <input class="form-check-input fake-disable" type="radio" value="2" ref="setCheckNameRound" name="activity[date_add][date_input0][round_setting]" @click="changModeCheckName($refs.setCheckNameRound)">
                <label class="form-check-label fs-5" for="setCheckNameII0">เช็คชื่อเป็นรอบ</label>
            </div>
            {{ auto_click_changModeCheckName(activity_setting.round_mode) }}
        </div>
        <div class="d-flex justify-content-center align-items-center p-5 d-none" ref="div_checkAllday">
            <h1 class="fs-3 fw-bold text-center">ระบบจะมีการเช็คชื่อตั้งแต่เวลาเริ่มจนเวลาจบ</h1>
        </div>
        <div ref="div_checkNameRound" class="d-flex flex-column div_CheckName p-0 p-lg-2 d-none">
            <div class="d-flex flex-column-reverse flex-lg-row justify-content-start justify-content-lg-around align-itens-start align-items-lg-center w-100">
                <div class="col-12 col-lg-7 d-flex flex-column flex-lg-row">
                    <label class="form-label w-100 w-lg-25 fs-5" for="selectSetRoundCheck0">จำนวนรอบ : </label>
                <select class="form-select h-50 w-100 w-lg-75 me-0 me-lg-3 get_IdselectRound fake-disable" disabled="" id="selectSetRoundCheck0">
                    <option disabled="" hidden="">เลือกจำนวนรอบ</option><option value="1">จำนวน 1 รอบ</option>
                    <option value="2">จำนวน 2 รอบ</option><option value="3">จำนวน 3 รอบ</option>
                    <option value="4">จำนวน 4 รอบ</option><option value="5">จำนวน 5 รอบ</option>
                </select>
            </div>
            <div class="col-12 col-lg-5 d-flex flex-column ps-0 ps-lg-5">
                    <label class="form-label fs-5 me-4 me-lg-0" for="selectTimeCheck0">ระยะเวลาที่เช็ค</label>
                    <select class="form-select w-100 w-lg-75 getId_selectTimeCheck fake-disable" id="selectTimeCheck0">
                        <option disabled="" hidden="">เลือกเวลา</option>
                        <option value="15">15 นาที</option>
                        <option value="30">30 นาที</option>
                        <option value="45">45 นาที</option>
                        <option value="60">60 นาที</option>
                        <option value="90">90 นาที</option>
                        <option value="120">120 นาที</option>
                    </select>
                </div>
            </div>
            <div class="col d-flex flex-column my-2" id="divShowTimeToUser0">

            </div>
        </div>
    </div>
</div>
</div>

    
    
    
    <div v-html="create"></div>
    <h5>รหัสกิจกรรม : {{ activity_setting }}</h5>
    
    <div v-if="activity_days_setting">
        <div v-for="day in activity_days_setting" :key="day">
            <p v-if="day">{{ get_dayId(day) }}รหัสวันที่ : {{ day.id }}{{ auto_click_createDay() }}</p>
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
            create: '<div class="bg-primary"> อร่อย</div>',
            url:'http://127.0.0.1:8000',

        };
    },
    mounted() {

        this.getActivitySetting()
        
        


    },

    methods: {

        getActivitySetting() {
            axios.get(this.url+'/api/activity-data/' + this.activity_id).then((res) => {
                this.activity_title = res.data;
                // console.log(this.activity_setting);

            },)

            axios.get(this.url+'/api/activity-setting/' + this.activity_id).then((res) => {
                this.activity_setting = res.data;
                // console.log(this.activity_setting);

            },)



            axios.get(this.url+'/api/activity_daychecker/' + this.activity_id).then((res) => {
                this.activity_days_setting = res.data;
                // console.log(this.activity_days_setting);


            },)

        },
        get_dayId(newId) {
            if (newId && newId.id && !this.activity_rounds_setting.length) {
                var dayId = newId.id;
                var day_activity_id = newId.activity_id;
                axios.get(this.url+'/api/activity/round-checker-api/' + day_activity_id + "/" + dayId).then((res) => {
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

    chooseModeTypeDatasOS(event) {
            if (event.value === '1'||event === '1') {
                this.$refs.div_HavedataOS.classList.remove('d-none');
                this.$refs.noDiv_HavedataOS.classList.add('d-none');
            } else if (event.value === '2'||event === '2') {
                this.$refs.div_HavedataOS.classList.add('d-none');
                this.$refs.noDiv_HavedataOS.classList.remove('d-none');
            } else {
                console.log('error')
            }
        },
    
    autoclick_list_of_name(list_name){
        if(list_name === '1'){
            this.$refs.radiosOSHaveData.checked = true;
            this.chooseModeTypeDatasOS(list_name);
        }else if(list_name === '2'){
            this.$refs.radiosOSnoHaveData.checked = true;
            this.chooseModeTypeDatasOS(list_name);
        }
        
    },

    createDays(){
        console.log('5555555');
        
      
    },

    auto_click_createDay(){
        this.$refs.btnNewInput_GetId.click();
    },

    changModeCheckName(check_name){
        if(check_name.value === '2'||check_name === '2'){
            this.$refs.div_checkAllday.classList.add('d-none');
            this.$refs.div_checkNameRound.classList.remove('d-none');
        }else if(check_name.value === '1'||check_name === '1'){
            this.$refs.div_checkNameRound.classList.add('d-none');
            this.$refs.div_checkAllday.classList.remove('d-none');
        }
    },

    auto_click_changModeCheckName(check_mode){
        
        if(check_mode === '1'){
            this.$refs.setCheckNameAllday.checked = true;
            this.changModeCheckName(check_mode);
        }else if(check_mode === '2'){
            this.$refs.setCheckNameRound.checked = true;
            this.changModeCheckName(check_mode);
        }else{
            console.log('erroe');
        }
    },

    },
}

</script>
