function updateTime() {
    const currentTime = new Date();
    const hours = currentTime.getHours().toString().padStart(2, '0');
    const minutes = currentTime.getMinutes().toString().padStart(2, '0');
    const seconds = currentTime.getSeconds().toString().padStart(2, '0');

    const formattedTime = `${hours}:${minutes}:${seconds}`;

    document.getElementById('current-time').innerText = formattedTime;
}

// อัปเดตเวลาทุกวินาที
setInterval(updateTime, 1000);

// เรียกฟังก์ชันเพื่อแสดงเวลาปัจจุบันครั้งแรก
updateTime();



let inputFirstName = document.getElementById('inputFirstName');
let inputLastName = document.getElementById('inputLastName');
let text_alert_firstname = document.getElementById('text-alert-firstname');
let text_alert_lastname = document.getElementById('text-alert-lastname');
let btn_submit = document.getElementById('btn-submit');
let lock = document.getElementById('lock');
let unlock = document.getElementById('unlock');
function checkFirstName() {
    const input = inputFirstName.value;
    
    if (input.length <= 2) {
        text_alert_firstname.textContent = 'กรุณากรอกชื่อ';
        text_alert_firstname.style.color = 'red';
        inputFirstName.classList.add('input-alert');
        inputFirstName.classList.remove('input-alert-success');
        return false;
    } else {
        text_alert_firstname.textContent = 'กรอกชื่อสำเร็จ';
        text_alert_firstname.style.color = '#006635';
        inputFirstName.classList.remove('input-alert');
        inputFirstName.classList.add('input-alert-success');
        return true;
    }
};

function checkLastName() {
    const input = inputLastName.value;
    
    if (input.length <= 2) {
        text_alert_lastname.textContent = 'กรุณากรอกนามสกุล';
        text_alert_lastname.style.color = 'red';
        inputLastName.classList.add('input-alert');
        inputLastName.classList.remove('input-alert-success');
        return false;
    } else {
        text_alert_lastname.textContent = 'กรอกนามสกุลสำเร็จ';
        text_alert_lastname.style.color = '#006635';
        inputLastName.classList.remove('input-alert');
        inputLastName.classList.add('input-alert-success');
        return true;
    }
};

// ฟังชั่นที่ตรวจสอบทั้งสอง input
function checkBothInputs() {
    let isValidFirstName = checkFirstName();
    let isValidLastName = checkLastName();

    // เปิดใช้งานปุ่มถ้าทั้งสอง input ถูกต้อง
    btn_submit.disabled = !(isValidFirstName && isValidLastName);
    if(isValidFirstName && isValidLastName){
        lock.classList.remove('d-none');
        unlock.classList.add('d-none');
    }else{
        lock.classList.add('d-none');
        unlock.classList.remove('d-none');
    }
};

inputFirstName.addEventListener('input', checkBothInputs);
inputLastName.addEventListener('input', checkBothInputs);