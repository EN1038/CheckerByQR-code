document.addEventListener('click', function (event) {
    if (event.target.classList.contains('btnNewInput_GetId')) {
        // เข้าถึง id ของสิ่งที่ถูกคลิก
        let clickedId = event.target.id;
        console.log('คุณคลิกที่องค์ประกอบที่มี id: ' + clickedId);


        addInput(event.target);
        var bottom = document.documentElement.scrollHeight - window.innerHeight;
        window.scrollTo({
            top: bottom,
            behavior: 'smooth'
        });

    } else if (event.target.classList.contains('iconClose')) {
        // เข้าถึง id ของสิ่งที่ถูกคลิก
        let clickedId_deleteDiv = event.target.id;
        console.log('คุณคลิกที่องค์ประกอบที่มี id: ' + clickedId_deleteDiv);

        deleteDiv(event.target.id);
    } else if (event.target.classList.contains('btnChangMode_GetId')) {
        // เข้าถึง id ของสิ่งที่ถูกคลิก
        let clickedId_changeMode = event.target.id;
        console.log('คุณคลิกที่องค์ประกอบที่มี id: ' + clickedId_changeMode);

        changeMode(event.target.id);
    } else if (event.target.classList.contains('inputFormCheck1_GetId')) {
        // เข้าถึง id ของสิ่งที่ถูกคลิก
        let clickedId = event.target.id;
        console.log('คุณคลิกที่องค์ประกอบที่มี id: ' + clickedId);

        chageModeLoginOutSide(event.target);
    } else if (event.target.classList.contains('inputFormCheck2_GetId')) {
        // เข้าถึง id ของสิ่งที่ถูกคลิก
        let clickedId = event.target.id;
        console.log('คุณคลิกที่องค์ประกอบที่มี id: ' + clickedId);

        chageModeLoginOutSide(event.target);
    } else if (event.target.classList.contains('enchagne_button')) {
        let clickedId_changeSystem = event.target.id;

        console.log('คุณคลิกที่องค์ประกอบที่มี id: ' + clickedId_changeSystem)
        changeSystem(event.target.id)
    } else if (event.target.classList.contains('chooseModeTypeDatasIS')) {
        let clickedId_chMTypeDataIS = event.target.id;

        console.log('คุณคลิกที่องค์ประกอบที่มี id: ' + clickedId_chMTypeDataIS)
        chooseModeTypeDatasIS(event.target.id)
    } else if (event.target.classList.contains('chooseModeTypeDatasOS')) {
        let clickedId_chMTypeData = event.target.id;

        console.log('คุณคลิกที่องค์ประกอบที่มี id: ' + clickedId_chMTypeData)
        chooseModeTypeDatasOS(event.target.id)
    } else if (event.target.classList.contains('show-imageHelper')) {
        let clickedId_showImgHelp = event.target.id;

        console.log('คุณคลิกที่องค์ประกอบที่มี id: ' + clickedId_showImgHelp)
        showimageHelper(event.target.id)
    } else if (event.target.classList.contains('showImg_Login')) {
        let clickedId_showImg_Login = event.target.id;

        console.log('คุณคลิกที่องค์ประกอบที่มี id: ' + clickedId_showImg_Login)
        showFormLogin(event.target.id)
    } else if (event.target.classList.contains('get_IdsetCheckName')) {
        let clickedId_IdsetCheckName = event.target.id;

        console.log('คุณคลิกที่องค์ประกอบที่มี id: ' + clickedId_IdsetCheckName);
        showSetCheckName(event.target.id);
    }
});

let counter = 0;

function addInput() {
    let inputContainer = document.getElementById('inputContainer');

    let inputWrapper = document.createElement('div');
    inputWrapper.setAttribute('id', 'input-warpper' + counter);
    inputWrapper.setAttribute('class', 'd-flex flex-column mb-4')

    if (counter > 0) {
        let previousInputWrapper = document.getElementById('input-warpper' + (counter - 1));
        if (previousInputWrapper) {
            previousInputWrapper.classList.add('border-bottom');
            previousInputWrapper.classList.add('border-success');
            previousInputWrapper.classList.add('border-3');
        }
    }

    let titleDiv = document.createElement('div');
    titleDiv.setAttribute('class', 'd-flex flex-row justify-content-between align-items-center mb-3 ');
    inputWrapper.appendChild(titleDiv);

    let showDateform = document.createElement('input');
    showDateform.setAttribute('class', 'fs-5 fw-bold input-title-form');
    showDateform.id = 'formDate';
    showDateform.value = 'Form : ' + (counter + 1);
    titleDiv.appendChild(showDateform);

    let closeIcon = document.createElement('i');
    closeIcon.setAttribute('class', 'fs-7 fw-bold text-decoration-none fa-solid fa-trash iconClose');
    closeIcon.setAttribute('id', 'iconClose' + counter);
    titleDiv.appendChild(closeIcon);

    let inputDive1 = document.createElement('div');
    inputDive1.setAttribute('class', 'd-flex flex-row justify-content-center align-items-center mb-3');

    let inputDive2 = document.createElement('div');
    inputDive2.setAttribute('class', 'd-flex flex-column mb-3');

    let date_activity_div = document.createElement('div_date');
    date_activity_div.setAttribute('class', 'col-6');

    let timeStart_activity_div = document.createElement('div_time_start');
    timeStart_activity_div.setAttribute('class', 'col-3 px-3');

    let timeEnd_activity_div = document.createElement('div_time_start');
    timeEnd_activity_div.setAttribute('class', 'col-3 px-3');

    let setCheckName_div = document.createElement('div_SetCheckName');
    setCheckName_div.setAttribute('class', 'd-flex');
    setCheckName_div.setAttribute('id', 'div_SetCheckNamex' + counter);

    let setCheckNameAllDay_div = document.createElement('div_AllDay');
    setCheckNameAllDay_div.setAttribute('id', 'CheckName_allDay' + counter);
    setCheckNameAllDay_div.setAttribute('class', 'd-flex justify-content-center align-items-center div_CheckName p-5 d-none');

    let setCheckNameRoundDay_div = document.createElement('div_RoundDay');
    setCheckNameRoundDay_div.setAttribute('id', 'CheckName_setCheckNameRoundDay' + counter);
    setCheckNameRoundDay_div.setAttribute('class', 'd-flex flex-column div_CheckName p-2 d-none');


    let date_input_label = document.createElement('label');
    date_input_label.setAttribute('class', 'form-label');
    date_input_label.textContent = "วันเดือนปี";
    date_activity_div.appendChild(date_input_label)

    let timeStart_input_label = document.createElement('label');
    timeStart_input_label.setAttribute('class', 'form-label');
    timeStart_input_label.textContent = "เวลาเริ่ม";
    timeStart_activity_div.appendChild(timeStart_input_label)

    let timeEnd_input_label = document.createElement('label');
    timeEnd_input_label.setAttribute('class', 'form-label');
    timeEnd_input_label.textContent = "เวลาจบ";
    timeEnd_activity_div.appendChild(timeEnd_input_label);

    let setCheckName_label = document.createElement('label');
    setCheckName_label.setAttribute('class', 'form-label');
    setCheckName_label.textContent = "ตั้งค่าการเช็คชื่อ : ";
    setCheckName_div.appendChild(setCheckName_label);

    let date_input = document.createElement('input');
    date_input.setAttribute('class', 'form-control datepicker getDate datepicker_costom_incorrect');
    date_input.setAttribute('type', 'text');
    date_input.setAttribute('name', `activity[date_add][date_input${counter}][date]`);
    date_input.setAttribute('id', 'date_input' + counter);
    date_input.setAttribute('placeholder', 'โปรดเลือกวันที่ก่อนจะใส่ข้อมูลช่องอื่น')
    date_input.onchange = getDate;
    date_activity_div.appendChild(date_input);

    let timeStart_input = document.createElement('input');
    timeStart_input.setAttribute('class', 'form-control get_IdInputTime fake-disable');
    timeStart_input.disabled = true;
    timeStart_input.setAttribute('type', 'time');
    timeStart_input.setAttribute('name', `activity[date_add][date_input${counter}][time][time_start]`);
    timeStart_input.setAttribute('id', 'timeStart_input' + counter);
    timeStart_activity_div.appendChild(timeStart_input);

    let timeEnd_input = document.createElement('input');
    timeEnd_input.setAttribute('class', 'form-control get_IdInputTime fake-disable');
    timeEnd_input.disabled = true;
    timeEnd_input.setAttribute('type', 'time');
    timeEnd_input.setAttribute('name', `activity[date_add][date_input${counter}][time][time_expried]`);
    timeEnd_input.setAttribute('id', 'timeEnd_input' + counter);
    timeEnd_activity_div.appendChild(timeEnd_input);

    let form_check_setCheckI = document.createElement('div');
    form_check_setCheckI.setAttribute('class', 'form-check ms-4');
    setCheckName_div.appendChild(form_check_setCheckI);

    let setCheckNameI_input = document.createElement('input');
    setCheckNameI_input.setAttribute('class', 'form-check-input get_IdsetCheckName fake-disable');
    setCheckNameI_input.disabled = true;
    setCheckNameI_input.setAttribute('type', 'radio');
    setCheckNameI_input.setAttribute('value', 'check_all_time_in_day');
    setCheckNameI_input.setAttribute('name', `activity[date_add][date_input${counter}][round_setting]`);
    setCheckNameI_input.setAttribute('id', 'setCheckNameI' + counter);
    form_check_setCheckI.appendChild(setCheckNameI_input);

    let setCheckNameI_label = document.createElement('label');
    setCheckNameI_label.setAttribute('class', 'form-check-label');
    setCheckNameI_label.setAttribute('for', 'setCheckNameI' + counter);
    setCheckNameI_label.textContent = 'เช็คชื่อทั้งวัน';
    form_check_setCheckI.appendChild(setCheckNameI_label);

    let form_check_setCheckII = document.createElement('div');
    form_check_setCheckII.setAttribute('class', 'form-check ms-4');
    setCheckName_div.appendChild(form_check_setCheckII);

    let setCheckNameII_input = document.createElement('input');
    setCheckNameII_input.setAttribute('class', 'form-check-input get_IdsetCheckName fake-disable');
    setCheckNameII_input.disabled = true;
    setCheckNameII_input.setAttribute('type', 'radio');
    setCheckNameII_input.setAttribute('value', 'check_round_per_day');
    setCheckNameII_input.setAttribute('id','setCheckNameII' + counter)
    setCheckNameII_input.setAttribute('name', `activity[date_add][date_input${counter}][round_setting][round${counter}]`);
    setCheckNameII_input.setAttribute('id', 'setCheckNameII' + counter)
    
    form_check_setCheckII.appendChild(setCheckNameII_input);

    let setCheckNameII_label = document.createElement('label');
    setCheckNameII_label.setAttribute('class', 'form-check-label');
    setCheckNameII_label.setAttribute('for', 'setCheckNameII' + counter);
    setCheckNameII_label.textContent = 'เช็คชื่อเป็นรอบ';
    form_check_setCheckII.appendChild(setCheckNameII_label);

    let showText_Allday = document.createElement('h1');
    showText_Allday.setAttribute('class', 'fs-3 fw-bold text-center');
    showText_Allday.textContent = 'ระบบจะมีการเช็คชื่อตั้งแต่เวลาเริ่มจนเวลาจบ';
    setCheckNameAllDay_div.appendChild(showText_Allday);

    let div_detailRoundSetCheckName = document.createElement('div');
    div_detailRoundSetCheckName.setAttribute('class', 'd-flex justify-content-around align-items-center w-100');
    setCheckNameRoundDay_div.appendChild(div_detailRoundSetCheckName);

    let div_setRoundCheck = document.createElement('div');
    div_setRoundCheck.setAttribute('class', 'col-7 d-flex');
    div_detailRoundSetCheckName.appendChild(div_setRoundCheck);

    let setRound_label = document.createElement('label');
    setRound_label.setAttribute('class', 'form-label w-25');
    setRound_label.setAttribute('for', 'selectSetRoundCheck' + counter);
    setRound_label.textContent = 'จำนวนรอบ : ';
    div_setRoundCheck.appendChild(setRound_label);

    let select_setRoundCheck = document.createElement('select');
    select_setRoundCheck.setAttribute('class', 'form-select h-50 w-75 me-3 get_IdselectRound fake-disable');
    select_setRoundCheck.disabled = true;
    select_setRoundCheck.setAttribute('id', 'selectSetRoundCheck' + counter);
    div_setRoundCheck.appendChild(select_setRoundCheck);

    let option_setRoundCheck_0 = document.createElement('option');
    option_setRoundCheck_0.selected = true;
    option_setRoundCheck_0.disabled = true;
    option_setRoundCheck_0.hidden = true;
    option_setRoundCheck_0.textContent = 'เลือกจำนวนรอบ';
    select_setRoundCheck.appendChild(option_setRoundCheck_0);

    let option_setRoundCheck_1 = document.createElement('option');
    option_setRoundCheck_1.textContent = 'จำนวน 1 รอบ';
    option_setRoundCheck_1.value = '1';
    select_setRoundCheck.appendChild(option_setRoundCheck_1);

    let option_setRoundCheck_2 = document.createElement('option');
    option_setRoundCheck_2.textContent = 'จำนวน 2 รอบ';
    option_setRoundCheck_2.value = '2';
    select_setRoundCheck.appendChild(option_setRoundCheck_2);

    let option_setRoundCheck_3 = document.createElement('option');
    option_setRoundCheck_3.textContent = 'จำนวน 3 รอบ';
    option_setRoundCheck_3.value = '3';
    select_setRoundCheck.appendChild(option_setRoundCheck_3);

    let option_setRoundCheck_4 = document.createElement('option');
    option_setRoundCheck_4.textContent = 'จำนวน 4 รอบ';
    option_setRoundCheck_4.value = '4';
    select_setRoundCheck.appendChild(option_setRoundCheck_4);

    let option_setRoundCheck_5 = document.createElement('option');
    option_setRoundCheck_5.textContent = 'จำนวน 5 รอบ';
    option_setRoundCheck_5.value = '5';
    select_setRoundCheck.appendChild(option_setRoundCheck_5);

    let div_selectTimeCheck = document.createElement('div');
    div_selectTimeCheck.setAttribute('class', 'col-5 d-flex flex-column ps-5');
    div_detailRoundSetCheckName.appendChild(div_selectTimeCheck);

    let selectTimeCheck_label = document.createElement('label');
    selectTimeCheck_label.setAttribute('class', 'form-label');
    selectTimeCheck_label.setAttribute('for', 'selectTimeCheck' + counter);
    selectTimeCheck_label.textContent = 'จำนวนระยะเวลาที่เช็ค';
    div_selectTimeCheck.appendChild(selectTimeCheck_label);

    let selectTimeCheck_input = document.createElement('select');
    selectTimeCheck_input.setAttribute('class', 'form-select w-75 getId_selectTimeCheck fake-disable');
    selectTimeCheck_input.setAttribute('id', 'selectTimeCheck' + counter);

    div_selectTimeCheck.appendChild(selectTimeCheck_input);

    let option_setTimeCheck_0 = document.createElement('option');
    option_setTimeCheck_0.selected = true;
    option_setTimeCheck_0.disabled = true;
    option_setTimeCheck_0.hidden = true;
    option_setTimeCheck_0.textContent = 'เลือกเวลา';

    selectTimeCheck_input.appendChild(option_setTimeCheck_0);

    let option_setTimeCheck_1 = document.createElement('option');
    option_setTimeCheck_1.textContent = '15 นาที';
    option_setTimeCheck_1.value = '15';
    selectTimeCheck_input.appendChild(option_setTimeCheck_1);

    let option_setTimeCheck_2 = document.createElement('option');
    option_setTimeCheck_2.textContent = '30 นาที';
    option_setTimeCheck_2.value = '30';
    selectTimeCheck_input.appendChild(option_setTimeCheck_2);

    let option_setTimeCheck_3 = document.createElement('option');
    option_setTimeCheck_3.textContent = '45 นาที';
    option_setTimeCheck_3.value = '45';
    selectTimeCheck_input.appendChild(option_setTimeCheck_3);

    let option_setTimeCheck_4 = document.createElement('option');
    option_setTimeCheck_4.textContent = '60 นาที';
    option_setTimeCheck_4.value = '60';
    selectTimeCheck_input.appendChild(option_setTimeCheck_4);

    let option_setTimeCheck_5 = document.createElement('option');
    option_setTimeCheck_5.textContent = '90 นาที';
    option_setTimeCheck_5.value = '90';
    selectTimeCheck_input.appendChild(option_setTimeCheck_5);

    let option_setTimeCheck_6 = document.createElement('option');
    option_setTimeCheck_6.textContent = '120 นาที';
    option_setTimeCheck_6.value = '120';
    selectTimeCheck_input.appendChild(option_setTimeCheck_6);

    let div_showTime = document.createElement('div');
    div_showTime.setAttribute('class', 'col d-flex flex-column my-2');
    div_showTime.setAttribute('id', 'divShowTimeToUser' + counter);
    setCheckNameRoundDay_div.appendChild(div_showTime);


    $(document).ready(function () {
        $('.datepicker').datepicker({
            format: "yyyy-mm-dd",
            language: "th",
            startDate: '0d',

        });
    });

    inputDive1.appendChild(date_activity_div);
    inputDive1.appendChild(timeStart_activity_div);
    inputDive1.appendChild(timeEnd_activity_div);
    inputDive2.appendChild(setCheckName_div);
    inputDive2.appendChild(setCheckNameAllDay_div);
    inputDive2.appendChild(setCheckNameRoundDay_div);
    inputWrapper.appendChild(inputDive1);
    inputWrapper.appendChild(inputDive2);
    inputContainer.appendChild(inputWrapper);

    counter++
}

function changeMode(clickedId_changeMode) {
    if (isNaN(clickedId_changeMode)) {
        let getIdlinks = clickedId_changeMode.match(/\d+/g);
        console.log('inif = ' + clickedId_changeMode);
        console.log(' = ' + getIdlinks);
        let arrowIcon = document.getElementById(clickedId_changeMode);
        let div4 = document.getElementById('divPersonInSide' + getIdlinks);
        let div5 = document.getElementById('divPersonOutSide' + getIdlinks);
        if (arrowIcon.classList.contains('fa-arrow-right')) {
            arrowIcon.classList.remove('fa-arrow-right');
            arrowIcon.classList.add('fa-arrow-left');
            div5.classList.toggle('d-none');
            div4.classList.toggle('d-none');
        } else {
            arrowIcon.classList.remove('fa-arrow-left');
            arrowIcon.classList.add('fa-arrow-right');
            div5.classList.toggle('d-none');
            div4.classList.toggle('d-none');
        }
    }
}

function chageModeLoginOutSide() {
    let haveListName = document.getElementById('inlineRadioI' + (counter - 1));
    let noHaveListName = document.getElementById('inlineRadioII' + (counter - 1));
    let div_haveListNames = document.getElementById('bigdiv_haveListName' + (counter - 1));
    let div_noHaveListNames = document.getElementById('div_noHaveListName' + (counter - 1));
    let textAlerts = document.getElementById('textAlert' + (counter - 1));

    if (noHaveListName.checked) {
        textAlerts.classList.add('d-none');
        div_haveListNames.classList.add('d-none');
        div_noHaveListNames.classList.remove('d-none');
    } else if (haveListName.checked) {
        textAlerts.classList.add('d-none');
        div_haveListNames.classList.remove('d-none');
        div_noHaveListNames.classList.add('d-none');
    } else {
        textAlerts.classList.remove('d-none');
        div_haveListNames.classList.add('d-none');
        div_noHaveListNames.classList.add('d-none');
    }
}

function deleteDiv(clickedId_deleteDiv) {
    if (isNaN(clickedId_deleteDiv)) {
        let getIdlinks = clickedId_deleteDiv.match(/\d+/g);
        let deleteDiv = document.getElementById('input-warpper' + getIdlinks);
        let previousDiv = document.getElementById('input-warpper' + (getIdlinks - 1));
        let get_date = document.getElementById('date_input' + getIdlinks);
        if (deleteDiv && previousDiv) {
            if (previousDiv) {
                console.log(previousDiv)
                previousDiv.classList.remove('border-bottom');
                previousDiv.classList.remove('border-success');
                previousDiv.classList.remove('border-3');
            }
        }
        selectedDates = selectedDates.filter(item => item !== get_date.value);
        console.log(selectedDates);
        deleteDiv.remove();
        counter--;
        // ดึง elements ที่มี ID เป็น "formDate" ทั้งหมด
        let formDateElements = document.querySelectorAll('[id="formDate"]');
        let countForm = 1;
        // เพิ่มตัวเลขลงใน value ของทุก element ที่พบ
        formDateElements.forEach(element => {
            element.value = 'Form : ' + countForm;
            countForm++;
        });
    }
}


function changeSystem(clickedId_ChangeSystem) {
    if (isNaN(clickedId_ChangeSystem)) {
        let changeSystem = document.getElementById(clickedId_ChangeSystem);
        let changeColorText1 = document.getElementById('text1');
        let changeColorText2 = document.getElementById('text2');
        let prInSides = document.getElementById('prInSide');
        let prOutSides = document.getElementById('prOutSide');
        let changeSystemValue = document.getElementById('getValueMode_sys');
        let div_HaDataIS = document.getElementById('div_HavedataIS');
        let div_noHaDataIS = document.getElementById('noDiv_HavedataIS');
        let div_HaDataOS = document.getElementById('div_HavedataOS');
        let div_noHaDataOS = document.getElementById('noDiv_HavedataOS');
        if (changeSystem.classList.contains('fa-arrow-left')) {
            changeSystem.classList.remove('fa-arrow-left');
            changeSystem.classList.add('fa-arrow-right');
            changeColorText1.classList.remove('text-success');
            changeColorText2.classList.add('text-success');
            prInSides.classList.add('d-none')
            prInSides.disabled = true;
            prOutSides.classList.remove('d-none');
            prOutSides.disabled = false;
            changeSystemValue.value = '2';
            div_HaDataIS.classList.add('d-none');
            div_HaDataIS.disabled = true;
            div_noHaDataIS.classList.add('d-none');
            div_noHaDataIS.disabled = true;
            div_HaDataOS.classList.add('d-none');
            div_HaDataOS.disabled = true;
            div_noHaDataOS.classList.add('d-none');
            div_noHaDataOS.disabled = true;
            console.log('changeSystem value = ' + changeSystemValue.value);
        } else {
            changeSystem.classList.remove('fa-arrow-right');
            changeSystem.classList.add('fa-arrow-left');
            changeColorText2.classList.remove('text-success');
            changeColorText1.classList.add('text-success');
            prOutSides.classList.add('d-none');
            prOutSides.disabled = true;
            prInSides.classList.remove('d-none');
            prInSides.disabled = false;
            changeSystemValue.value = '1';
            div_HaDataIS.classList.add('d-none');
            div_HaDataIS.disabled = true;
            div_noHaDataIS.classList.add('d-none');
            div_noHaDataIS.disabled = true;
            console.log('changeSystem value = ' + changeSystemValue.value);
        }
    }
}

function chooseModeTypeDatasIS(clickedId_chMTypeDataIS) {
    if (isNaN(clickedId_chMTypeDataIS)) {
        let chooseMoTpDataIS = document.getElementById(clickedId_chMTypeDataIS);
        let div_HaDataIS = document.getElementById('div_HavedataIS');
        let div_noHaDataIS = document.getElementById('noDiv_HavedataIS');
        console.log((chooseMoTpDataIS));
        if (chooseMoTpDataIS === (id = radiosISHaveData)) {
            console.log('yes')
            div_HaDataIS.classList.remove('d-none');
            div_HaDataIS.disabled = false;
            div_noHaDataIS.classList.add('d-none');
            div_noHaDataIS.disabled = true;
        } else if (chooseMoTpDataIS === (id = radiosISnoHaveData)) {
            console.log('no')
            div_noHaDataIS.classList.remove('d-none');
            div_noHaDataIS.disabled = false;
            div_HaDataIS.classList.add('d-none');
            div_HaDataIS.disabled = true;
        }
    }
}

function chooseModeTypeDatasOS(clickedId_chMTypeDataOS) {
    if (isNaN(clickedId_chMTypeDataOS)) {
        let chooseMoTpDataOS = document.getElementById(clickedId_chMTypeDataOS);
        let div_HaDataOS = document.getElementById('div_HavedataOS');
        let div_noHaDataOS = document.getElementById('noDiv_HavedataOS');
        if (chooseMoTpDataOS === (id = radiosOSHaveData)) {
            console.log('yes')
            div_HaDataOS.classList.remove('d-none');
            div_HaDataOS.disabled = false;
            div_noHaDataOS.classList.add('d-none');
            div_noHaDataOS.disabled = true;
        } else if (chooseMoTpDataOS === (id = radiosOSnoHaveData)) {
            console.log('no')
            div_noHaDataOS.classList.remove('d-none');
            div_noHaDataOS.disabled = false;
            div_HaDataOS.classList.add('d-none');
            div_HaDataOS.disabled = true;
        }
    }
}

function showimageHelper(clickedId_showImgHelp) {
    if (isNaN(clickedId_showImgHelp)) {
        let showImgHelper = document.getElementById(clickedId_showImgHelp);
        let div_imgHelpIS = document.getElementById('img-helperIS');
        let div_imgHelpOS = document.getElementById('img-helperOS');
        if (showImgHelper === (id = imgHelpIS)) {
            div_imgHelpIS.classList.toggle('d-none');
        } else if (showImgHelper === (id = imgHelpOS)) {
            div_imgHelpOS.classList.toggle('d-none');
        }
    }
}

function showFormLogin(clickedId_showImg_Login) {
    if (isNaN(clickedId_showImg_Login)) {
        let showImgForm = document.getElementById(clickedId_showImg_Login);
        let div_ImgForm = document.getElementById('showImgLogin');
        if (showImgForm) {
            div_ImgForm.classList.toggle('d-none');
        }
    }
}

function showSetCheckName(clickedId_IdsetCheckName) {

    if (isNaN(clickedId_IdsetCheckName)) {
        let getIdlinks = clickedId_IdsetCheckName.match(/\d+/g);
        let setCheckName = document.getElementById(clickedId_IdsetCheckName);
        let div_Rounddays = document.getElementById('CheckName_setCheckNameRoundDay' + getIdlinks);
        let div_Alldays = document.getElementById('CheckName_allDay' + getIdlinks);
        if (setCheckName) {
            let checkNameAlldays = document.getElementById('setCheckNameI' + getIdlinks);
            let checkNameRounddays = document.getElementById('setCheckNameII' + getIdlinks);
            checkNameAlldays.classList.remove('fake-disable');
            checkNameRounddays.classList.remove('fake-disable');
        }

        if (setCheckName.id === 'setCheckNameI' + getIdlinks) {
            div_Alldays.classList.remove('d-none');
            div_Rounddays.classList.add('d-none');
        } else if (setCheckName.id === 'setCheckNameII' + getIdlinks) {
            div_Rounddays.classList.remove('d-none');
            div_Alldays.classList.add('d-none');
        } else {
            console.log('error');
        }

    }
}




document.addEventListener('change', function (event) {
    if (event.target.classList.contains('select-agency')) {
        // เข้าถึง id ของสิ่งที่ถูกคลิก
        let changedId_selectAgency = event.target.id;
        console.log('คุณคลิกที่องค์ประกอบที่มี id: ' + changedId_selectAgency);

        addSelected(event);
    } else if (event.target.classList.contains('select-major')) {
        // เข้าถึง id ของสิ่งที่ถูกคลิก
        let changedId_selectAgency = event.target.id;
        console.log('คุณคลิกที่องค์ประกอบที่มี id: ' + changedId_selectAgency);

        addOption(event);
        addSelected(event);
    } else if (event.target.classList.contains('get_IdselectRound')) {

        let changedId_IdselectRound = event.target;
        console.log('คุณคลิกที่องค์ประกอบที่มี id: ' + changedId_IdselectRound.classList);
        changedId_IdselectRound.classList.remove('fake-disable');
        changedId_IdselectRound.classList.add('revese-fake-disable');
        createSelectOptions(event);
    } else if (event.target.classList.contains('get_IdInputTime')) {

        let get_InputTime = event.target;
        console.log('คุณคลิกที่องค์ประกอบที่มี id: ' + get_InputTime);

        getTime(get_InputTime);
    } else if (event.target.classList.contains('dynamicSelects')) {
        let get_Selects = event.target;
        console.log('ไอดี: ' + get_Selects);
        get_Selects.classList.remove('fake-disable');
        get_Selects.classList.add('revese-fake-disable');
        showResult(get_Selects);
        disableOptionsResult(get_Selects);
    } else if (event.target.classList.contains('formFileList')) {
        let get_formfile = event.target;
        const file = get_formfile.files[0];
        if (file) {
            const fileName = file.name;
            const extension = fileName.split('.').pop().toLowerCase();
            const id_fileName = get_formfile.id;;
            console.log(id_fileName);
            if (extension !== 'xlsx' && extension !== 'xls') {
                if (id_fileName === 'formFileIS') {
                    let get_idDivFormFileIS = document.getElementById('divFileIS');
                    if (get_idDivFormFileIS.id === 'divFileIS') {
                        var Labels = get_idDivFormFileIS.querySelectorAll('label');
                        // วนลูปผ่าน select และ label แล้วลบทุกตัว
                        Labels.forEach(element => {
                            element.remove(); // ลบ select และ label ทั้งหมดออกจาก DOM
                        });
                    }

                    let alert_text = document.createElement('label');
                    alert_text.setAttribute('class', 'text-danger fs-6 fw-bold')
                    alert_text.textContent = 'โปรดเลือกไฟล์ที่มีนามสกุล .xlsx หรือ .xls เท่านั้น';
                    get_idDivFormFileIS.appendChild(alert_text);
                    get_formfile.value = '';
                } else if (id_fileName === 'formFileOS') {
                    let get_idDivFormFileOS = document.getElementById('divFileOS');
                    if (get_idDivFormFileOS.id === 'divFileOS') {
                        var Labels = get_idDivFormFileOS.querySelectorAll('label');
                        // วนลูปผ่าน select และ label แล้วลบทุกตัว
                        Labels.forEach(element => {
                            element.remove(); // ลบ select และ label ทั้งหมดออกจาก DOM
                        });
                    }

                    let alert_text = document.createElement('label');
                    alert_text.setAttribute('class', 'text-danger fs-6 fw-bold')
                    alert_text.textContent = 'โปรดเลือกไฟล์ที่มีนามสกุล .xlsx หรือ .xls เท่านั้น';
                    get_idDivFormFileOS.appendChild(alert_text);
                    get_formfile.value = '';
                }

            } else if (id_fileName === 'formFileIS') {
                let get_idDivFormFileIS = document.getElementById('divFileIS');
                if (get_idDivFormFileIS.id === 'divFileIS') {
                    var Labels = get_idDivFormFileIS.querySelectorAll('label');
                    // วนลูปผ่าน select และ label แล้วลบทุกตัว
                    Labels.forEach(element => {
                        element.remove(); // ลบ select และ label ทั้งหมดออกจาก DOM
                    });
                }

                let alert_text = document.createElement('label');
                alert_text.setAttribute('class', 'text-success fs-6 fw-bold')
                alert_text.textContent = 'เลือกไฟล์ Excel สำเร็จ';
                get_idDivFormFileIS.appendChild(alert_text);
            } else if (id_fileName === 'formFileOS') {
                let get_idDivFormFileOS = document.getElementById('divFileOS');
                if (get_idDivFormFileOS.id === 'divFileOS') {
                    var Labels = get_idDivFormFileOS.querySelectorAll('label');
                    // วนลูปผ่าน select และ label แล้วลบทุกตัว
                    Labels.forEach(element => {
                        element.remove(); // ลบ select และ label ทั้งหมดออกจาก DOM
                    });
                }

                let alert_text = document.createElement('label');
                alert_text.setAttribute('class', 'text-success fs-6 fw-bold')
                alert_text.textContent = 'เลือกไฟล์ Excel สำเร็จ';
                get_idDivFormFileOS.appendChild(alert_text);
            }
        }
    } else if (event.target.classList.contains('getId_selectTimeCheck')) {
        let get_selectTimeCheck = event.target;
        console.log('คุณมีการเปลี่ยนแปลงที่ 661 : ' + get_selectTimeCheck.id);

        get_selectTimeCheck.classList.remove('fake-disable');
        get_selectTimeCheck.classList.add('revese-fake-disable');

        let getIdlinks = get_selectTimeCheck.id.match(/\d+/g);
        let get_selectSetRoundCheck = document.getElementById('selectSetRoundCheck' + getIdlinks)
        get_selectSetRoundCheck.disabled = false;
    }
});

function addOption(event) {
    let selectedOption = event.target.value;
    let input = document.getElementById("myInput");

    // Check if the option already exists in the input
    if (!input.innerHTML.includes(selectedOption)) {
        let optionDiv = document.createElement("div");
        optionDiv.setAttribute('class', 'div-option');
        optionDiv.innerHTML = selectedOption + "<i class='fa-solid fa-xmark' onclick='removeOption(this)'></i>";
        input.appendChild(optionDiv);
    }

}

function removeOption(element) {
    element.parentNode.remove();
}

function addSelected(event) {
    let selectedOptions = event.target.value;
    let selectedOptionId = event.target.id;
    let divNewSelecte = document.getElementById('div_Select');
    console.log(selectedOptionId);
    if (selectedOptionId === 'mySelect') {
        let div_Support = document.getElementById('selectSupport');
        if (selectedOptions === 'เลือกสังกัดหรือเลือกทั้งหมด') {
            divNewSelecte.removeChild(div_Support);
        } else if (!div_Support) {
            let div_Select = document.createElement('select');
            div_Select.setAttribute('class', 'select-upgrade select-major');
            div_Select.setAttribute('id', 'selectSupport');
            divNewSelecte.appendChild(div_Select);

            const optionRecall = document.createElement('option');
            optionRecall.value = 'เลือกทั้งหมด'; // กำหนดค่า value ของ option เป็น ID ของ agency
            optionRecall.textContent = 'เลือกสังกัดหรือเลือกทั้งหมด'; // กำหนดข้อความใน option เป็นชื่อของ agency
            selectSupport.appendChild(optionRecall); // เพิ่ม option เข้าไปใน select

            fetch('/api/major-by-id/' + selectedOptions)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json(); // แปลงข้อมูลที่ได้รับเป็น JSON
                })
                .then(data => {
                    console.log(data);
                    const select = document.getElementById('selectSupport'); // เลือกตัว element select จาก ID

                    data.major_data.forEach(major => {
                        // สร้างตัวเลือก option ใหม่
                        const option = document.createElement('option');
                        option.value = major.major_name; // กำหนดค่า value ของ option เป็น ID ของ agency
                        option.textContent = major.major_name; // กำหนดข้อความใน option เป็นชื่อของ agency

                        select.appendChild(option); // เพิ่ม option เข้าไปใน select
                    });
                })
                .catch(error => {
                    // จัดการเมื่อเกิดข้อผิดพลาด
                    console.error('There was a problem with the fetch operation:', error);
                });
        } else if (div_Support) {
            divNewSelecte.removeChild(div_Support);
            let div_Select = document.createElement('select');
            div_Select.setAttribute('class', 'select-upgrade select-major');
            div_Select.setAttribute('id', 'selectSupport');
            divNewSelecte.appendChild(div_Select);

            const optionRecall = document.createElement('option');
            optionRecall.value = 'เลือกทั้งหมด'; // กำหนดค่า value ของ option เป็น ID ของ agency
            optionRecall.textContent = 'เลือกสังกัดหรือเลือกทั้งหมด'; // กำหนดข้อความใน option เป็นชื่อของ agency
            selectSupport.appendChild(optionRecall); // เพิ่ม option เข้าไปใน select

            fetch('/api/major-by-id/' + selectedOptions)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json(); // แปลงข้อมูลที่ได้รับเป็น JSON
                })
                .then(data => {
                    console.log(data);
                    const select = document.getElementById('selectSupport'); // เลือกตัว element select จาก ID

                    data.major_data.forEach(major => {
                        // สร้างตัวเลือก option ใหม่
                        const option = document.createElement('option');
                        option.value = major.major_name; // กำหนดค่า value ของ option เป็น ID ของ agency
                        option.textContent = major.major_name; // กำหนดข้อความใน option เป็นชื่อของ agency

                        select.appendChild(option); // เพิ่ม option เข้าไปใน select
                    });
                })
                .catch(error => {
                    // จัดการเมื่อเกิดข้อผิดพลาด
                    console.error('There was a problem with the fetch operation:', error);
                });
        }
    } else if (selectedOptionId === 'selectSupport') {
        console.log(':#')
    }

}

let globalIdlinks;

function createSelectOptions(event) {
    let IdselectRound = event.target.id;
    let getIdlinks = IdselectRound.match(/\d+/g);
    let divShowTimeToUsers = document.getElementById('divShowTimeToUser' + getIdlinks);

    // ลบ select ที่มี id เป็น dynamicSelect ทิ้งทั้งหมด
    if (divShowTimeToUsers.id === 'divShowTimeToUser' + getIdlinks) {
        var selectAndLabels = divShowTimeToUsers.querySelectorAll('select, label,input,div');
        // วนลูปผ่าน select และ label แล้วลบทุกตัว
        selectAndLabels.forEach(element => {
            element.remove(); // ลบ select และ label ทั้งหมดออกจาก DOM
        });
        clearArrayValues()
    }
    let time_check = document.getElementById('selectTimeCheck' + getIdlinks).value;
    let time_start = document.getElementById('timeStart_input' + getIdlinks);
    let time_end = document.getElementById('timeEnd_input' + getIdlinks);

    let [startHour, startMinute] = time_start.value.split(':').map(Number);
    let [endHour, endMinute] = time_end.value.split(':').map(Number);

    let startTotalMinutes = startHour * 60 + startMinute; // เวลาเริ่มต้นในรูปแบบนาที
    let endTotalMinutes = endHour * 60 + endMinute; // เวลาสิ้นสุดในรูปแบบนาที

    let timeDifferenceMinutes = Math.abs(endTotalMinutes - startTotalMinutes); // ละยะห่างของเวลาในนาที


    let valueIdselectRound = event.target.value;

    var input_timeStart = document.createElement('input');
    input_timeStart.setAttribute('class', 'd-none');
    input_timeStart.setAttribute('id', 'input_timeStart' + getIdlinks);
    input_timeStart.value = time_start.value;

    var input_timeCheck = document.createElement('input');
    input_timeCheck.setAttribute('class', 'd-none');
    input_timeCheck.setAttribute('id', 'input_timeCheck' + getIdlinks);
    input_timeCheck.value = time_check;


    divShowTimeToUsers.appendChild(input_timeStart);
    divShowTimeToUsers.appendChild(input_timeCheck);


    for (var x = 0; x <= (valueIdselectRound - 1); x++) {
        var div_row = document.createElement('div');
        div_row.setAttribute('class', 'd-flex justify-content-start align-items-center');
        div_row.id = 'div_row' + x;

        var label = document.createElement('label');
        label.setAttribute('class', 'col-2 form-label fw-bold text-green');
        label.setAttribute('for', 'dynamicSelect' + x);
        label.id = 'dynamicLabel' + x;
        label.textContent = 'การเช็คชื่อรอบที่ ' + (x + 1);

        var select = document.createElement('select');
        select.setAttribute('class', 'col form-select mb-3 mx-2 h-25 dynamicSelects d-flex justify-content-start fake-disable');
        select.id = 'dynamicSelect' + x + counter;

        var div = document.createElement('div');
        div.setAttribute('class', 'col-6  d-flex my-2 ms-3 justify-content-center');
        div.id = 'divSpace' + x + counter;

        var optionTitle = document.createElement('option');
        optionTitle.disabled = true;
        optionTitle.selected = true;
        optionTitle.hidden = true;
        optionTitle.value = 'xx';
        optionTitle.text = 'หลังเวลาเริ่ม';
        select.appendChild(optionTitle);


        if (time_check === '15' || time_check === '30' || time_check === '45' || time_check === '60') {
            // console.log('Option ที่ถูกเลือก: ' + time_check);
            const intervalOneHours = 60;
            for (let z = 0; z <= timeDifferenceMinutes; z += intervalOneHours) {
                var option = document.createElement('option');
                // เวลาที่มีอยู่เริ่มต้น
                let [hours, minutes] = time_start.value.split(':').map(Number);

                // แปลงเวลาเป็นนาที
                let totalMinutes = hours * 60 + minutes;

                // บวก 1 ชั่วโมง (60 นาที)
                totalMinutes += z;

                // แปลงเวลากลับเป็นชั่วโมงและนาที
                hours = Math.floor(totalMinutes / 60) % 24; // เพื่อให้เวลาไม่เกิน 24 ชั่วโมง
                minutes = totalMinutes % 60;

                // แปลงเวลากลับเป็นรูปแบบ 'hh:mm'
                let newTime = `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}`;
                option.value = z.toString();
                option.textContent = 'หลังเวลาเริ่ม : ' + newTime + ' นาที'; // สร้างเนื้อหาของ option โดยใช้ฟังก์ชัน formatTime ที่คุณจะต้องสร้างขึ้น
                select.appendChild(option);
            }

        } else if (time_check === '90' || time_check === '120') {
            // console.log('Option ที่ถูกเลือก: ' + time_check);
            const intervalOneHours = 120;
            for (let z = 0; z <= timeDifferenceMinutes; z += intervalOneHours) {
                var option = document.createElement('option');
                // เวลาที่มีอยู่เริ่มต้น
                let [hours, minutes] = time_start.value.split(':').map(Number);

                // แปลงเวลาเป็นนาที
                let totalMinutes = hours * 60 + minutes;

                // บวก 1 ชั่วโมง (60 นาที)
                totalMinutes += z;

                // แปลงเวลากลับเป็นชั่วโมงและนาที
                hours = Math.floor(totalMinutes / 60) % 24; // เพื่อให้เวลาไม่เกิน 24 ชั่วโมง
                minutes = totalMinutes % 60;

                // แปลงเวลากลับเป็นรูปแบบ 'hh:mm'
                let newTime = `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}`;
                option.value = z.toString(); // แปลงเป็น string และกำหนดค่าให้กับ option
                option.textContent = 'หลังเวลาเริ่ม : ' + newTime + ' นาที'; // สร้างเนื้อหาของ option โดยใช้ฟังก์ชัน formatTime ที่คุณจะต้องสร้างขึ้น
                select.appendChild(option);
            }
        }


        divShowTimeToUsers.appendChild(div_row);
        div_row.appendChild(label);
        div_row.appendChild(select);
        div_row.appendChild(div);


    }
    globalIdlinks = getIdlinks;
}


function getTime(get_InputTime) {
    let getIdlinks = get_InputTime.id.match(/\d+/g);
    let time_start = document.getElementById('timeStart_input' + getIdlinks);
    let time_end = document.getElementById('timeEnd_input' + getIdlinks);
    let get_setCheckNameI = document.getElementById('setCheckNameI' + getIdlinks);
    let get_setCheckNameII = document.getElementById('setCheckNameII' + getIdlinks);

    time_start.classList.remove('fake-disable');
    time_start.classList.add('revese-fake-disable');
    if (time_start.value >= time_end.value) {
        console.log('Time Start is more than Time End');
        console.log('time_start = ' + time_start.value + ' of ' + time_start.id);
        console.log('time_end = ' + time_end.value + ' of ' + time_end.id);

        // เพิ่มคลาสสีแดงในช่องเวลาจบ
        time_end.classList.remove('revese-fake-disable');
        time_end.classList.add('red-border');
        // เคลียร์ค่าในช่องเวลาจบ
        time_end.value = '';
    } else if (time_start.value < time_end.value) {
        console.log('Time End is more than Time Start');
        console.log('time_start = ' + time_start.value + ' of ' + time_start.id);
        console.log('time_end = ' + time_end.value + ' of ' + time_end.id);

        // ลบคลาสสีแดงออกจากช่องเวลาจบ (ถ้ามี)
        time_end.classList.remove('red-border');
        time_end.classList.add('revese-fake-disable');
        get_setCheckNameI.disabled = false;
        get_setCheckNameII.disabled = false;
    } else {
        console.log('Both times are the same');
    }
}

function getDate() {
    let getDate = this;
    let getIdlinks = getDate.id.match(/\d+/g);
    let get_timeStart = document.getElementById('timeStart_input' + getIdlinks);
    let get_timeEnd = document.getElementById('timeEnd_input' + getIdlinks);
    if (checkUniqueDate(getDate) && checkMinDate(getDate)) {
        // เพิ่มวันที่ลงใน array เมื่อผ่านเงื่อนไขทั้งสอง
        selectedDates.push(getDate.value);
        getDate.classList.remove('datepicker_costom_incorrect');
        getDate.classList.add('datepicker_costom_success');
        get_timeStart.disabled = false;
        get_timeEnd.disabled = false;
        console.log("วันที่ที่ถูกเลือก:", selectedDates);
    } else {
        // ล้างค่าวันที่ใน input หากมีข้อผิดพลาด
        getDate.value = '';
    }


}

// สร้าง array เพื่อเก็บวันที่ที่เลือกไว้แล้ว
var selectedDates = [];

function clearArrayValues() {
    selectedOptions = {}; // ลบค่าทั้งหมดในอาเรย์
  }

function checkUniqueDate(dateValue) {
    let getIdlinks = dateValue.id.match(/\d+/g);
    let get_dateinput = document.getElementById('date_input' + getIdlinks);
    // ตรวจสอบว่าวันที่ที่ผู้ใช้เลือกนี้ซ้ำกับวันที่อื่นหรือไม่
    if (selectedDates.includes(dateValue.value)) {
        get_dateinput.placeholder = 'วันที่นี้มีอยู่แล้ว โปรดเลือกวันที่อื่น';
        // alert("วันที่นี้มีอยู่แล้ว โปรดเลือกวันที่อื่น");
        return false; // ยกเลิกการเพิ่มวันที่ซ้ำ
    }
    return true; // วันที่ไม่ซ้ำกับที่มีอยู่แล้ว
}


function checkMinDate(dateValue) {
    let getIdlinks = dateValue.id.match(/\d+/g);
    let get_dateinput = document.getElementById('date_input' + getIdlinks);
    var regEx = /^\d{4}-\d{2}-\d{2}$/; // รูปแบบ YYYY-MM-DD
    var isValidFormat = dateValue.value.match(regEx) !== null;
    if (isValidFormat) {
        var selectedDate = new Date(dateValue.value); // วันที่ที่ผู้ใช้เลือก

        // เทียบวันที่ที่ผู้ใช้เลือกกับวันที่อยู่ในอาเรย์เพื่อตรวจสอบว่าน้อยกว่าหรือไม่
        for (var i = 0; i < selectedDates.length; i++) {
            var storedDate = new Date(selectedDates[i]);
            if (selectedDate < storedDate) {
                get_dateinput.placeholder = 'ขออภัย ไม่สามารถเลือกวันที่น้อยกว่าวันที่มีอยู่แล้วได้';
                // alert("ไม่สามารถเลือกวันที่น้อยกว่าวันที่มีอยู่แล้วได้");
                return false; // ไม่ให้เลือกวันที่น้อยกว่าวันที่อยู่ในอาเรย์
            }
        }

        return true; // ให้เลือกวันที่
    } else {
        alert("รูปแบบวันที่ไม่ถูกต้อง");
        return false; // ไม่ให้เลือกเนื่องจากรูปแบบวันที่ไม่ถูกต้อง
    }
}


function showResult(get_Selects) {
    let getIdselects = get_Selects.id.match(/\d+/g);
    let getValue = parseInt(get_Selects.value);
    let get_idDivSpace = document.getElementById('divSpace' + getIdselects);
    let get_valueTimeStart = document.getElementById('input_timeStart' + globalIdlinks).value;
    let get_valueTimeCheck = document.getElementById('input_timeCheck' + globalIdlinks).value;
    let intValueTimeCheck = parseInt(get_valueTimeCheck);

    if (get_idDivSpace.id === 'divSpace' + getIdselects) {
        var selectAndLabels = get_idDivSpace.querySelectorAll('input');
        // วนลูปผ่าน select และ label แล้วลบทุกตัว
        selectAndLabels.forEach(element => {
            element.remove(); // ลบ select และ label ทั้งหมดออกจาก DOM
        });
    }
    // เวลาที่มีอยู่เริ่มต้น
    let [hours, minutes] = get_valueTimeStart.split(':').map(Number);

    // แปลงเวลาเป็นนาที
    let totalMinutes = hours * 60 + minutes;

    // บวก 1 ชั่วโมง (60 นาที)
    totalMinutes += getValue;

    // แปลงเวลากลับเป็นชั่วโมงและนาที
    hours = Math.floor(totalMinutes / 60) % 24; // เพื่อให้เวลาไม่เกิน 24 ชั่วโมง
    minutes = totalMinutes % 60;

    // แปลงเวลากลับเป็นรูปแบบ 'hh:mm'
    let newTime = `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}`;

    let durationTime = totalMinutes + intValueTimeCheck;
    // แปลงเวลากลับเป็นชั่วโมงและนาที
    hours_duration = Math.floor(durationTime / 60) % 24; // เพื่อให้เวลาไม่เกิน 24 ชั่วโมง
    minutes_duration = durationTime % 60;

    // แปลงเวลากลับเป็นรูปแบบ 'hh:mm'
    let duration_Time = `${hours_duration.toString().padStart(2, '0')}:${minutes_duration.toString().padStart(2, '0')}`;


    let Box = document.createElement('input');
    Box.setAttribute('class', 'my-4 bg-disable w-75 border-0')
    Box.disabled = true;
    Box.value = 'จะเริ่มเช็คชื่อเมื่อเวลา : ' + newTime + ' - ' + duration_Time;
    Box.id = 'Boxinput' + getIdselects;
    get_idDivSpace.appendChild(Box);

    let roundStart_time = document.createElement('input');
    roundStart_time.classList.add('d-none');
    roundStart_time.value = newTime;
    roundStart_time.id = 'roundStart_timex' + getIdselects;
    roundStart_time.setAttribute('name', `activity[date_input${counter-1}][round][round_start]`);
    get_idDivSpace.appendChild(roundStart_time);

    let roundEnd_time = document.createElement('input');
    roundEnd_time.classList.add('d-none');
    roundEnd_time.value = duration_Time;
    roundEnd_time.id = 'roundEnd_timex' + getIdselects;
    roundEnd_time.setAttribute('name', `activity[date_input${counter-1}][round][round_end]`);
    get_idDivSpace.appendChild(roundEnd_time);
    // let roundEnd_time = document.createElement('input');let roundEnd_time = document.createElement('input');
   

}

let selectedOptions = {};

function disableOptionsResult(selectElement) {
    const selectedOption = selectElement.value;
    
    // ตรวจสอบว่า option ได้ถูกเลือกไว้แล้วหรือไม่
  if (selectedOptions[selectedOption]) {
    // alert("Option already selected in another select!");
    selectElement.value = ''; // ล้างการเลือก
  } else {
    const previousValue = Object.keys(selectedOptions).find(
      key => selectedOptions[key] === selectElement
    );
    
    if (previousValue) {
      delete selectedOptions[previousValue];
    }
    
    // บันทึก option ที่ถูกเลือก
    selectedOptions[selectedOption] = selectElement;
  }

    // อัปเดตสถานะของ options ในทุกช่อง select
    updateOptionsAvailability();
}

function updateOptionsAvailability() {
    let divShowTimeToUser = document.getElementById('divShowTimeToUser' + globalIdlinks);
    let allSelects = divShowTimeToUser.querySelectorAll('select');
  
    allSelects.forEach(select => {
      const selectedOption = select.value;
  
      // ปรับปรุง options ในทุกช่องตาม option ที่ถูกเลือก
      const options = select.querySelectorAll('option');
      options.forEach(option => {
        option.disabled = selectedOptions[option.value];
      });
    });
  }


//api fetch

fetch('/api/agency-data')
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json(); // แปลงข้อมูลที่ได้รับเป็น JSON
    })
    .then(data => {
        const select = document.getElementById('mySelect'); // เลือกตัว element select จาก ID

        data.agency_data.forEach(agency => {
            // สร้างตัวเลือก option ใหม่
            const option = document.createElement('option');
            option.value = agency.id; // กำหนดค่า value ของ option เป็น ID ของ agency
            option.textContent = agency.Agency_name; // กำหนดข้อความใน option เป็นชื่อของ agency

            select.appendChild(option); // เพิ่ม option เข้าไปใน select
        });
    })
    .catch(error => {
        // จัดการเมื่อเกิดข้อผิดพลาด
        console.error('There was a problem with the fetch operation:', error);
    });
