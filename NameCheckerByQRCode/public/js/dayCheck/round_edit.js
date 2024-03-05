function checkTimeEdit(round_id, date_id) {
    // ใช้ fetch
    fetch('/api/activity/round_data/' + date_id)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {

            data.forEach(function (element, index, array) {


                if (index != array.length - 1) {


                    let nextElement = array[index + 1];
                    let round_start_time = document.getElementById('round_start_time' + round_id);
                    let start_time_alert_text = document.getElementById('start_time_alert_text' + round_id);
                    let end_time_alert_text = document.getElementById('end_time_alert_text' + round_id);
                    let round_end_time = document.getElementById('round_end_time' + round_id);
                    let button = document.getElementById('button' + round_id);

                    if (round_start_time.value > round_end_time.value) {
                        round_start_time.classList.add('border-danger');
                        start_time_alert_text.setAttribute('class', 'text-danger form-label mt-1');
                        start_time_alert_text.innerHTML = "กรอกเวลาไม่ถูกต้อง";

                        end_time_alert_text.innerHTML = "กรอกเวลาไม่ถูกต้อง";
                        end_time_alert_text.setAttribute('class', 'text-danger form-label mt-1');
                        round_end_time.classList.add('border-danger');

                        button.disabled = true;

                    } else if (round_start_time.value > nextElement.rounde_checker_time_start) {
                        start_time_alert_text.innerHTML = "กรอกเวลาไม่ถูกต้อง";
                        start_time_alert_text.setAttribute('class', 'text-danger form-label mt-1');
                        round_start_time.classList.add('border-danger');
                        button.disabled = true;
                    } else {

                        start_time_alert_text.innerHTML = "เวลาถูกต้อง";
                        round_start_time.classList.remove('border-danger');
                        round_start_time.classList.add('border-success');
                        start_time_alert_text.setAttribute('class', 'text-success form-label mt-1');

                        end_time_alert_text.innerHTML = "เวลาถูกต้อง";
                        round_end_time.classList.remove('border-danger');
                        round_end_time.classList.add('border-success');
                        end_time_alert_text.setAttribute('class', 'text-success form-label mt-1');
                        button.disabled = false;
                    }

                } else {

                }


            });
            // for(i=0;i<=data.length;i++){
            //     if (i === data.length - 1) {
            //         console.log(`Index ${i} is the last index.`);
            //         // Your code for the last index
            //     } else {

            //         if(data. < )

            //     }
            // }

        })
        .catch(error => {
            console.error('Error:', error);
        });

}

let dateShow = document.getElementById('dateNaja');

const gregorianDate = moment(dateShow.textContent);
const buddhistYear = gregorianDate.year() + 543; // เพิ่ม 543 เพื่อแปลงเป็น พ.ศ.
const thaiDate = `${gregorianDate.date()} ${gregorianDate.format('MMMM')} พ.ศ. ${buddhistYear}`;
// console.log(thaiDate);

const date = new Date(dateShow.textContent); // สร้างวัตถุ Date จากวันที่ที่ต้องการ
const dayOfWeek = date.getDay();

let dayName;

switch (dayOfWeek) {
    case 0:
        dayName = 'วันอาทิตย์';
        break;
    case 1:
        dayName = 'วันจันทร์';
        break;
    case 2:
        dayName = 'วันอังคาร';
        break;
    case 3:
        dayName = 'วันพุธ';
        break;
    case 4:
        dayName = 'วันพฤหัสบดี';
        break;
    case 5:
        dayName = 'วันศุกร์';
        break;
    case 6:
        dayName = 'วันเสาร์';
        break;
}




dateShow.textContent = dayName + 'ที่ ' + thaiDate;
