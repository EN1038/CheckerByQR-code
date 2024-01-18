<template>
    <!-- <div>{{ activity_data }}</div>
    <div>{{ activity_data.activity_name }}</div>
    <div>{{ activity_data.user_id }}</div>
    <div>{{ activity_data.activity_description }}</div>
    <div>{{ activity_data.status }}</div> -->
    <!-- <div class="row">
     <div class="col mb-3">
         <span class="btn btn-success">วัน</span>
         <div v-for="date in date_data">
             <div>{{ date.id }}</div>
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
                    <textarea class="form-control rounded-4" name="activity[detail]" id="" cols="30" rows="5"></textarea>
                </div>
                

                
                
                <div class="d-flex flex-column mx-3 mx-lg-5 " id="prOutSide">
                    <div class="text-start">
                        <a class="fw-bold fs-3 text-decoration-none mt-5 mb-1 mb-lg-3">มีข้อมูลรายชื่อหรือไม่ <i class="fa-solid fa-circle-question"></i></a>
                    </div>
                      
                <div class="col d-flex flex-column flex-lg-row align-items-start align-items-lg-center justify-content-center justify-content-lg-start pt-3">
                    
                    <div class="form-check col-12 col-lg-3 ps-4 ps-lg-5">
                    <input class="form-check-input fs-5 chooseModeTypeDatasOS" type="radio" v-model="selectedOption" value="1" ref="haveList" :checked="date_data.round_mode === '1'">
                    <label class="form-check-label fs-5" for="radiosOSHaveData">
                        มีรายชื่อ
                    </label>
                    </div>
                    <div class="form-check col-12 col-lg-3">
                    <input class="form-check-input fs-5 chooseModeTypeDatasOS" type="radio" v-model="selectedOption" value="2" ref="no_haveList" :checked="date_data.round_mode === '2'">
                    <label class="form-check-label fs-5" for="radiosOSnoHaveData">
                        ไม่มีรายชื่อ
                    </label>
                    </div>
                    
                </div>
                <div v-if="selectedOption === '1'" class="col my-4 " id="contentHaveData" >
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
                <div v-if="selectedOption === '2'" class="col my-4 " id="contentNoHaveData" >
                    <span class="fw-bold fs-5">ไม่มีข้อมูลมีรายชื่อ</span>
                    <div class="form-check ms-3 mt-2">
                        
                        <p class="fs-4">กรอกชื่อและนามสกุล</p>
                      </div>
                     
                </div>
                <div class="col mt-3 mb-4">
                    <span class="fw-bold fs-4 text-green">วันจัดกิจกรรม <i class="fa-regular fa-calendar-days"></i></span>
                </div>
                
            </div>
            <div id="inputContainer">
                   
                <div v-for="item in items" :key="item.id" :class="{'border-bottom border-success border-3': item.id > 0}">
                <div class="d-flex flex-row justify-content-between align-items-center mb-3">
                    <input class="fs-4 fw-bold input-title-form" :id="'formDate' + item.id" :value="'วันที่ : ' + (items.indexOf(item) + 1)">
                    <i class="fs-3 fw-bold text-decoration-none fa-solid fa-calendar-xmark iconClose" :id="'iconClose' + item.id" @click="deleteInput(item.id)"></i>
                </div>
                <div class="d-flex flex-column flex-lg-row justify-content-start justify-content-lg-center align-items-start align-items-lg-center mb-3">
                    <!-- ... โค้ดส่วนที่เหลือของคุณ ... -->
                </div>
                </div>

            </div>
            <div class="d-flex flex-column flex-lg-row justify-content-center justify-content-lg-start aling-items-start aling-items-lg-center mb-5">
                <div class="col-12 col-lg d-flex">
                    <a class="scrollButton btnNewInput_GetId" id="scrollButton" @click="addInput"><i class="fa-solid fa-calendar-plus"></i> สร้างวันเช็คชื่อ</a>
                </div>
                <div class="col d-flex flex-row-reverse">
                    <button type="submit" class="btn-submit-setting " id="submit"><i class="fa-solid fa-cloud-arrow-up"></i> บันทึกการตั้งค่า</button>
                </div>
            </div>      
            
        </div>
    </div>
</div>

    


    
 </template>
 
 <script>
 import axios from 'axios';
     export default {
         props:['activity_id'],
         data(){
             return {
                 date_data:[],
                 activity_data:[],
                 items: [],
                counter: 0,
                selectedOption: null,
 
             }
         },
 
         mounted() {
             this.getDayCheckerData()
            //  this.auto_click_list(this.date.round_mode)
         },
         methods: {
         async getDayCheckerData(){
             axios.get('http://127.0.0.1:8000/api/activity/all-setting/'+this.activity_id).then((res)=>{
                 this.date_data = res.data.date_data;
                 this.activity_data = res.data.activity_data;
 
                 console.log(this.date_data);
             });
         },
         addInput() {
            this.items.push({ id: this.counter });
            this.counter++;
            // เพิ่มโค้ดที่เกี่ยวข้องกับการใส่ข้อมูลใน items ตามที่คุณต้องการ
            },
         deleteInput(itemId) {
            // เพิ่มโค้ดที่เกี่ยวข้องกับการลบ Input ตาม itemId
            this.items = this.items.filter(item => item.id !== itemId);
            },
        auto_click_list(value){
            if(value){
                if(value === '1'){
                    this.$refs.haveList.checked = true;
                }else if(value === '2'){
                    this.$refs.no_haveList.checked = true;
                }
            }else{
                console.log('error, function auto_click_list : No have value in choose auto_click_list')
            }
            
        }

         },
     }
 </script>