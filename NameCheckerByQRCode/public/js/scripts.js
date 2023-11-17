// JavaScript function เพื่อเปลี่ยนเส้นทาง
function navigateToURLTrash() {
    // เปลี่ยนเส้นทางไปยัง URL ที่คุณต้องการ
    window.location.href = "https://www.youtube.com/";
}
// JavaScript function เพื่อเปลี่ยนเส้นทาง
function navigateToURLEdit() {
    // เปลี่ยนเส้นทางไปยัง URL ที่คุณต้องการ
    window.location.href = "https://www.youtube.com/";
}
//ซ่อน div ในหน้า activity_dashboard
function toggleDivs() {
    var form1 = document.getElementById('Form1');
    var form2 = document.getElementById('Form2');
    var toggleButton = document.getElementById('toggleButton');

    if (form1.style.display === 'none') {
        form1.style.display = 'block';
        form2.style.display = 'none';
        toggleButton.innerHTML = `<i class="fa-solid fa-arrow-left"></i>`;
    } else {
        form1.style.display = 'none';
        form2.style.display = 'block';
        toggleButton.innerHTML = `<i class="fa-solid fa-arrow-right"></i>`;
    }
}

 const toggleAllButton = document.getElementById('toggleAllButton');
    const toggles = document.querySelectorAll('.toggle');

    toggleAllButton.addEventListener('click', () => {
        toggles.forEach(toggle => {
            toggle.classList.toggle('checked');
        });
    });