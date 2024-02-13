// ฟังก์ชันนับถอยหลัง 5 วินาทีและปิดหน้าเว็บ
function countDownAndClose() {
    var count = 5;
    var countdown = setInterval(function() {
        var countdownDiv = document.getElementById('coutdown-close');
        var minutes = Math.floor(count / 60);
        var seconds = count % 60;
        countdownDiv.textContent = formatTime(minutes) + ":" + formatTime(seconds);
        count--;
        if (count < 0) {
            clearInterval(countdown); // หยุดการนับถอยหลังเมื่อครบ 5 วินาที
            countdownDiv.textContent = 'หมดเวลาแล้ว'
            window.location.href = 'https://www.google.com/';
        }
    }, 1000); // นับถอยหลังทุก 1 วินาที
}

// ฟังก์ชันสำหรับการจัดรูปแบบเวลาให้มีรูปแบบ 2 ตัวเลข เช่น 01, 02, 03
function formatTime(time) {
    return (time < 10 ? '0' : '') + time;
}

// เรียกใช้งานฟังก์ชันเมื่อโหลดหน้าเว็บ
window.onload = function() {
    countDownAndClose();
};
