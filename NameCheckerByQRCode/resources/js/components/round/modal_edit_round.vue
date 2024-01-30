<template>
   <div class="modal fade" id="round-edit{{$row->id}}"   tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-success fw-bold" id="round-edit{{$row->id}}">แก้ไขข้อมูลรอบเช็คชื่อ</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action=""  method="post">
          @csrf
          <div class="mb-3">
            <label for="" class="form-label">ชื่อรอบเช็คชื่อ</label>
            <input type="text" name="round_name" value="{{$row->rounde_name}}" class="form-control">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">เวลาเริ่มการเช็ค</label>
            <input type="time" id="round_start_time" name="round_time_start" value="{{$row->rounde_checker_time_start}}" class="form-control">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">เวลาจบการเช็คชื่อ</label>
            <input type="time" name="round_time_end" id="round_end_time_{{$row->id}}" value="{{$row->rounde_checker_time_expried}}" class="form-control">
          </div>
          <button type="submit" class="btn btn-success ">Save changes</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
</template>

<script>
import axios from 'axios';
    export default {
        props:['round_id'],
        data(){
            return{

            }
        },
        mounted() {
            console.log(this.round_id);
        },
        methods: {
            async getRoundData(){
                axios.get().then((res)=>{

                })
            }
        },
    }
</script>
