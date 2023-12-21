
let detailText = document.getElementById('detailText');
  detailText.addEventListener('click', () => {
    if (detailText.style.height === '41px' || detailText.style.height === '') {
        detailText.style.height = 'auto';
        detailText.style.whiteSpace = 'normal';
    } else {
        detailText.style.height = '41px';
        detailText.style.whiteSpace = 'nowrap';
    }
    });

    function deleteSelected() {
        const checkboxes = document.querySelectorAll('.select-row:checked');
        checkboxes.forEach(checkbox => {
          checkbox.closest('tr').remove();
        });
      }
    

function clickTr(id){
    const checkbox = document.getElementById('idInput'+id);
    console.log("ไอดีของ <tr> คือ: "+checkbox.checked);
    if (checkbox.checked === false) {
        checkbox.checked = true;
    } else {
        checkbox.checked = false;
    }
    
}


function downloadQR(){
    let qr_code = document.getElementById('qr_code');
    console.log(qr_code.src)
     // สร้างองค์ประกอบ <a> เพื่อดาวน์โหลด
     let link = document.createElement("a");
     link.href = qr_code.src;
     link.download = "qr_code.png"; // ชื่อที่จะให้ไฟล์ QR Code ถูกบันทึกเป็น
 
     // ใส่องค์ประกอบลงใน DOM และคลิก
     document.body.appendChild(link);
     link.click();
 
     // ลบองค์ประกอบที่สร้างขึ้นหลังจากคลิก
     document.body.removeChild(link);
}