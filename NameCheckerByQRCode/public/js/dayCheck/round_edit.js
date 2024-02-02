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
                    let round_start_time = document.getElementById('round_start_time');
                    let start_time_alert_text = document.getElementById('start_time_alert_text');
                    let end_time_alert_text = document.getElementById('end_time_alert_text');
                    let round_end_time = document.getElementById('round_end_time');

                    if (round_start_time.value > round_end_time.value) {
                        round_start_time.classList.add('border-danger');
                        start_time_alert_text.setAttribute('class', 'text-danger form-label mt-1');
                        start_time_alert_text.innerHTML = "กรอกเวลาไม่ถูกต้อง";

                        end_time_alert_text.innerHTML = "กรอกเวลาไม่ถูกต้อง";
                        end_time_alert_text.setAttribute('class', 'text-danger form-label mt-1');
                        round_end_time.classList.add('border-danger');

                    } else if (round_start_time.value > nextElement.rounde_checker_time_start) {
                        start_time_alert_text.innerHTML = "กรอกเวลาไม่ถูกต้อง";
                        start_time_alert_text.setAttribute('class', 'text-danger form-label mt-1');
                        round_start_time.classList.add('border-danger');
                    } else {

                        start_time_alert_text.innerHTML = "เวลาถูกต้อง";
                        round_start_time.classList.remove('border-danger');
                        round_start_time.classList.add('border-success');
                        start_time_alert_text.setAttribute('class', 'text-success form-label mt-1');

                        end_time_alert_text.innerHTML = "เวลาถูกต้อง";
                        round_end_time.classList.remove('border-danger');
                        round_end_time.classList.add('border-success');
                        end_time_alert_text.setAttribute('class', 'text-success form-label mt-1');
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
