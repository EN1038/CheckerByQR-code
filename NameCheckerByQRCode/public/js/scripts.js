$(document).ready(function () {
    $('.datepicker').datepicker({
        format: "dd-mm-yyyy",
        language: "th",
        startDate: '0d',

    });

    let counter = 1;

    function checkInputsFilled() {
        const allDateInputs = document.querySelectorAll('.form-control.datepicker');
        const allTimeInputsStart = document.querySelectorAll('.form-control.input-time-start');
        const allTimeInputsOut = document.querySelectorAll('.form-control.input-time-out');
        let allFilled = true;

        allDateInputs.forEach(input => {
            if (input.value === '') {
                allFilled = false;
            }
        });

        allTimeInputsStart.forEach(input => {
            if (input.value === '') {
                allFilled = false;
            }
        });

        allTimeInputsOut.forEach(input => {
            if (input.value === '') {
                allFilled = false;
            }
        });

        return allFilled;
    }



    //start-add-date
    function addNewInput() {
        console.log(counter);
        let newDivStart = document.createElement('div');
        newDivStart.id = 'newDivStart' + counter;
        newDivStart.className = 'mb-2';

        let newDivOut = document.createElement('div');
        newDivOut.id = 'newDivOut' + counter;
        newDivOut.className = 'mb-2';

        let newInputStartTime = document.createElement('input');
        newInputStartTime.type = 'time';
        newInputStartTime.id = 'startTimeId' + counter;
        newInputStartTime.className = 'form-control input-time-start mb-2 bg-input';

        let newInputOutTime = document.createElement('input');
        newInputOutTime.type = 'time';
        newInputOutTime.id = 'endTimeId' + counter;
        newInputOutTime.className = 'form-control input-time-out mb-2 bg-input';

        let newDiv = document.createElement('div');
        newDiv.id = 'inputContainer' + counter;
        newDiv.className = 'input-group date mb-2';

        let newInput = document.createElement('input');
        newInput.type = 'text';
        newInput.className = 'form-control datepicker border border-end-0 bg-input';
        newInput.placeholder = 'เลือกวันที่';

        let deleteButton = document.createElement('button');
        deleteButton.className = 'btn-fs-dates border border-start-0';
        deleteButton.innerHTML = '<i class="fa-solid fa-circle-xmark"></i>';
        deleteButton.onclick = function () {
            deleteInput(newDiv, newInput, deleteButton, newDivStart, newDivOut, newInputStartTime, newInputOutTime);
        };

        let inputsContainer = document.getElementById('inputContainer1');
        inputsContainer.appendChild(newDiv);

        newDiv.appendChild(newInput);
        newDiv.appendChild(deleteButton);

        newDivStart.appendChild(newInputStartTime);
        newDivOut.appendChild(newInputOutTime);

        document.getElementById('containerIpStart').appendChild(newDivStart);
        document.getElementById('containerIpOut').appendChild(newDivOut);

        let latestDate = getLatestDate();

        $(newInput).datepicker({
            format: "dd-mm-yyyy",
            language: "th",
            startDate: latestDate,
        });



        counter++;
    }

    function checkTime(startTime, endTime) {
        const time1 = document.getElementById(startTime).value;
        const time2 = document.getElementById(endTime).value;

        const time1InSeconds = new Date('1970-01-01T' + time1 + 'Z').getTime() / 1000;
        const time2InSeconds = new Date('1970-01-01T' + time2 + 'Z').getTime() / 1000;

        return time2InSeconds < time1InSeconds;
    }

    function getLatestDate() {
        const allInputs = document.querySelectorAll('.form-control.datepicker');
        let latestDate = null;

        allInputs.forEach(input => {
            if (input.value !== '') {
                let dateString = input.value;
                let dateParts = dateString.split("-");
                let selectedDate = new Date(dateParts[2], dateParts[1] - 1, dateParts[0]);

                // ถ้ายังไม่มี latestDate หรือวันที่นี้มากกว่า latestDate
                if (!latestDate || selectedDate > latestDate) {
                    latestDate = selectedDate;
                }
            }
        });

        // หากมี latestDate
        if (latestDate) {
            // เพิ่ม 1 วัน
            latestDate.setDate(latestDate.getDate() + 1);

            // แปลง latestDate เป็นรูปแบบ 'dd-mm-yyyy'
            let stringLatestDate = $.datepicker.formatDate('dd-mm-yyyy', latestDate);
            return stringLatestDate;
        }
        return '0d'; // หรือ startDate เริ่มต้นถ้าไม่มีวันที่ล่าสุด
    }

    function enablePreviousInputs() {
        const allDateInputs = document.querySelectorAll('.form-control.datepicker');
        const allTimeInputsStart = document.querySelectorAll('.form-control.input-time-start');
        const allTimeInputsOut = document.querySelectorAll('.form-control.input-time-out');
        let previousDateInputs = Array.from(allDateInputs);
        let previousTimeInputsStart = Array.from(allTimeInputsStart);
        let previousTimeInputsOut = Array.from(allTimeInputsOut);

        previousDateInputs.forEach(input => {
            $(previousDateInputs[counter - 2]).prop('disabled', false);
        });

        previousTimeInputsStart.forEach(input => {
            $(previousTimeInputsStart[counter - 2]).prop('disabled', false);
        });

        previousTimeInputsOut.forEach(input => {
            $(previousTimeInputsOut[counter - 2]).prop('disabled', false);
        });
    }

    function deleteInput(divElement, inputElement, deleteButton, newDivStart, newDivOut, newInputStartTime, newInputOutTime) {
        enablePreviousInputs();

        divElement.parentNode.removeChild(divElement);
        inputElement.parentNode.removeChild(inputElement);
        deleteButton.parentNode.removeChild(deleteButton);

        if (newDivStart) {
            newDivStart.remove();
        }

        if (newDivOut) {
            newDivOut.remove();
        }

        if (newInputStartTime) {
            newInputStartTime.remove();
        }

        if (newInputOutTime) {
            newInputOutTime.remove();
        }

        counter--;
    }




    $('.datepicker').on('input', function () {
        const addButton = document.getElementById('addInputButton');
        if (checkInputsFilled()) {
            addButton.disabled = false;
        } else {
            addButton.disabled = true;
        }
    });

    $('#addInputButton').on('click', function () {
        if (checkInputsFilled()) {
            addNewInput();

            $('.form-control.datepicker').each(function () {
                if ($(this).val() !== '') {
                    $(this).prop('disabled', true);
                }
            });

            $('.form-control.input-time-start').each(function () {
                if ($(this).val() !== '') {
                    $(this).prop('disabled', true);
                }
            });

            $('.form-control.input-time-out').each(function () {
                if ($(this).val() !== '') {
                    $(this).prop('disabled', true);
                }
            });

            const currentCounter = counter-2;
            const startTimeId = 'startTimeId' + currentCounter;
            const endTimeId = 'endTimeId' + currentCounter;

            if (checkTime(startTimeId, endTimeId)) {
                console.log('เวลา timeout ต้องน้อยกว่าเวลา start');
                $('#addInputButton').prop('disabled', true);
                
            } else {
                console.log('เวลาถูกต้อง');
                $('#addInputButton').prop('disabled', false);
            }

            console.log(checkInputsFilled);
        }
    });

});

//end-add-date
