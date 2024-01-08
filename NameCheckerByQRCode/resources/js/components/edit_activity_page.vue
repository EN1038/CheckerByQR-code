<template>
   <div>
    <div class="text-center mt-5">
    <h1 class="text-greenlight fw-bold"><i class="fa-solid fa-gear fa-spin"></i> ตั้งค่ากิจกรรม</h1>
    <span class="fw-light fs-2">ชื่อกิจกรรม : </span>
    </div>
    <div class="container">
    
    <div class="row">
        <div class="col">
            <!-- {{-- activity detail   --}} -->
            <form action="" class="row" method="post"  id="formNaJa" enctype="multipart/form-data">
                <div class="mb-3 mt-4">
                    <label class="label-form fs-5">รายละเอียดกิจกรรม <i class="fa-regular fa-message"></i></label>
                    <textarea class="form-control rounded-4" name="activity[detail]" id="" cols="30" rows="5"></textarea>
                </div>
                

                <div class="d-flex flex-column mx-3 mx-lg-5 " id="prOutSide">
                    <!-- {{-- <a class="fw-bold fs-3 text-decoration-none">บุคคลภายนอก</a>   --}} -->
                    <div class="text-start">
                        <a class="fw-bold fs-3 text-decoration-none mt-5 mb-1 mb-lg-3">มีข้อมูลรายชื่อหรือไม่ <i class="fa-solid fa-circle-question"></i></a>
                    </div>
                      
                <div class="col d-flex flex-column flex-lg-row align-items-start align-items-lg-center justify-content-center justify-content-lg-start pt-3">
                    <div class="form-check col-12 col-lg-3 ps-4 ps-lg-5">
                        <input class="form-check-input fs-5 chooseModeTypeDatasOS" type="radio" name="activity[setting][have_list_of_name]" id="radiosOSHaveData" value="1">
                        <label class="form-check-label fs-5" for="radiosOS">
                          มีรายชื่อ
                        </label>
                      </div>
                      <div class="form-check col-12 col-lg-3">
                        <input class="form-check-input fs-5 chooseModeTypeDatasOS" type="radio" name="activity[setting][have_list_of_name]" id="radiosOSnoHaveData" value="2">
                        <label class="form-check-label fs-5" for="radiosOS">
                          ไม่มีรายชื่อ
                        </label>
                      </div>
                </div>
                <div class="col my-4 d-none" id="div_HavedataOS">
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
                <div class="col my-4 d-none" id="noDiv_HavedataOS">
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
                        <!-- {{-- java create --}} -->
            </div>
            <div class="d-flex flex-column flex-lg-row justify-content-center justify-content-lg-start aling-items-start aling-items-lg-center mb-5">
                <div class="col-12 col-lg d-flex">
                    <a class="scrollButton btnNewInput_GetId" id="scrollButton"><i class="fa-solid fa-calendar-plus" @click="click"></i> สร้างวันเช็คชื่อ</a>
                </div>
                <div class="col d-flex flex-row-reverse">
                    <button type="submit" class="btn-submit-setting " id="submit"><i class="fa-solid fa-cloud-arrow-up"></i> บันทึกการตั้งค่า</button>
                </div>
            </div>      
            </form>
        </div>
    </div>
</div>
   </div>
</template>

<script>
import axios from 'axios';
    export default {
        data() {
    return {
      counter: 0,
    };
  },
        mounted() {
            this.click();
        },
        methods: {
            
               click(){
                this.counter++;
                console.log(this.counter);
               } 
                
        } 
    }
    
</script>
