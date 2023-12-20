$(document).ready(function() {
    for (let i = 1; i <= 100; i++) {
      $('#myDataTable tbody').append(`
        <tr>
          <td>Name ${i}</td>
          <td>Position ${i}</td>
          <td>Office ${i}</td>
          <td>${Math.floor(Math.random() * 60) + 20}</td>
          <td>2011/04/${i}</td>
          <td>$${Math.floor(Math.random() * 100000) + 50000}</td>
        </tr>
      `);
    }

    // เรียกใช้ Datatables
    $('#myDataTable').DataTable();
  });
  
  $(document).ready(function() {
    // เลือกช่อง select โดยใช้ jQuery
    var selectBox = $('div.dataTables_wrapper select');
  
    // ปรับแต่งตามลักษณะที่ต้องการ
    selectBox.addClass('your-custom-class'); // เพิ่มคลาสที่ปรับแต่งเพิ่มเติม
    selectBox.css('width', '200px'); // ปรับความกว้าง
    selectBox.css('border-radius', '10px'); // ปรับความกว้าง
    // และการปรับแต่งอื่น ๆ ตามต้องการ
  
    // เพิ่ม event listener หรือการปรับแต่งอื่น ๆ ตามต้องการ
  });


