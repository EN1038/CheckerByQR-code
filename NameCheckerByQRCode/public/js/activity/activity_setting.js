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

        console.log('คุณคลิกที่องค์ประกอบที่มี id: ' + clickedId_IdsetCheckName)
        showSetCheckName(event.target.id) 
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

    let showDateform = document.createElement('a');
    showDateform.setAttribute('class', 'fs-5 fw-bold text-decoration-none');
    showDateform.textContent = 'Form : ' + (counter + 1);
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

    let setCheckNameAllDay_div = document.createElement('div_AllDay');
    setCheckNameAllDay_div.setAttribute('id','CheckName_allDay'+counter);
    setCheckNameAllDay_div.setAttribute('class','d-flex justify-content-center align-items-center div_CheckName p-5 d-none');

    let setCheckNameRoundDay_div = document.createElement('div_RoundDay');
    setCheckNameRoundDay_div.setAttribute('id','CheckName_setCheckNameRoundDay'+counter);
    setCheckNameRoundDay_div.setAttribute('class','d-flex flex-column align-items-center div_CheckName p-2 d-none');
    

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
    date_input.setAttribute('class', 'form-control datepicker');
    date_input.setAttribute('type', 'text');
    date_input.setAttribute('name', 'date_input[' + counter + ']');
    date_input.setAttribute('id', 'date_input' + counter);
    date_activity_div.appendChild(date_input);

    let timeStart_input = document.createElement('input');
    timeStart_input.setAttribute('class', 'form-control get_IdInputTime');
    timeStart_input.setAttribute('type', 'time');
    timeStart_input.setAttribute('name', 'timeStart_input[' + counter + ']');
    timeStart_input.setAttribute('id', 'timeStart_input' + counter);
    timeStart_activity_div.appendChild(timeStart_input);

    let timeEnd_input = document.createElement('input');
    timeEnd_input.setAttribute('class', 'form-control get_IdInputTime');
    timeEnd_input.setAttribute('type', 'time');
    timeEnd_input.setAttribute('name', 'timeEnd_input[' + counter + ']');
    timeEnd_input.setAttribute('id', 'timeEnd_input' + counter);
    timeEnd_activity_div.appendChild(timeEnd_input);

    let form_check_setCheckI = document.createElement('div');
    form_check_setCheckI.setAttribute('class','form-check ms-4');
    setCheckName_div.appendChild(form_check_setCheckI);

    let setCheckNameI_input = document.createElement('input');
    setCheckNameI_input.setAttribute('class','form-check-input get_IdsetCheckName');
    setCheckNameI_input.setAttribute('type','radio');
    setCheckNameI_input.setAttribute('name','setCheckName');
    setCheckNameI_input.setAttribute('id','setCheckNameI'+counter);
    form_check_setCheckI.appendChild(setCheckNameI_input);

    let setCheckNameI_label = document.createElement('label');
    setCheckNameI_label.setAttribute('class','form-check-label');
    setCheckNameI_label.setAttribute('for','setCheckNameI'+counter);
    setCheckNameI_label.textContent = 'เช็คชื่อทั้งวัน';
    form_check_setCheckI.appendChild(setCheckNameI_label);
    
    let form_check_setCheckII = document.createElement('div');
    form_check_setCheckII.setAttribute('class','form-check ms-4');
    setCheckName_div.appendChild(form_check_setCheckII);

    let setCheckNameII_input = document.createElement('input');
    setCheckNameII_input.setAttribute('class','form-check-input get_IdsetCheckName');
    setCheckNameII_input.setAttribute('type','radio');
    setCheckNameII_input.setAttribute('name','setCheckName');
    setCheckNameII_input.setAttribute('id','setCheckNameII'+counter);
    form_check_setCheckII.appendChild(setCheckNameII_input);

    let setCheckNameII_label = document.createElement('label');
    setCheckNameII_label.setAttribute('class','form-check-label');
    setCheckNameII_label.setAttribute('for','setCheckNameII'+counter);
    setCheckNameII_label.textContent = 'เช็คชื่อเป็นรอบ';
    form_check_setCheckII.appendChild(setCheckNameII_label);

    let showText_Allday = document.createElement('h1');
    showText_Allday.setAttribute('class','fs-3 fw-bold text-center');
    showText_Allday.textContent = 'ระบบจะมีการเช็คชื่อตั้งแต่เวลาเริ่มจนเวลาจบ';
    setCheckNameAllDay_div.appendChild(showText_Allday);

    let div_detailRoundSetCheckName = document.createElement('div');
    div_detailRoundSetCheckName.setAttribute('class','d-flex justify-content-around align-items-center w-100');
    setCheckNameRoundDay_div.appendChild(div_detailRoundSetCheckName);

    let div_setRoundCheck = document.createElement('div');
    div_setRoundCheck.setAttribute('class','col-7 d-flex');
    div_detailRoundSetCheckName.appendChild(div_setRoundCheck);

    let setRound_label = document.createElement('label');
    setRound_label.setAttribute('class','form-label w-25');
    setRound_label.setAttribute('for','selectSetRoundCheck'+counter);
    setRound_label.textContent = 'จำนวนรอบ : ';
    div_setRoundCheck.appendChild(setRound_label);

    let select_setRoundCheck = document.createElement('select');
    select_setRoundCheck.setAttribute('class','form-select h-50 w-75 me-3 get_IdselectRound');
    select_setRoundCheck.setAttribute('id','selectSetRoundCheck'+counter);
    div_setRoundCheck.appendChild(select_setRoundCheck);

    let option_setRoundCheck_0 = document.createElement('option');
    option_setRoundCheck_0.selected = true;
    option_setRoundCheck_0.disabled = true;
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
    div_selectTimeCheck.setAttribute('class','col-5 d-flex flex-column ps-5');
    div_detailRoundSetCheckName.appendChild(div_selectTimeCheck);

    let selectTimeCheck_label = document.createElement('label');
    selectTimeCheck_label.setAttribute('class','form-label');
    selectTimeCheck_label.setAttribute('for','selectTimeCheck'+counter);
    selectTimeCheck_label.textContent = 'จำนวนระยะเวลาที่เช็ค';
    div_selectTimeCheck.appendChild(selectTimeCheck_label);

    let selectTimeCheck_input = document.createElement('select');
    selectTimeCheck_input.setAttribute('class','form-select w-75');
    selectTimeCheck_input.setAttribute('id','selectTimeCheck'+counter);
    div_selectTimeCheck.appendChild(selectTimeCheck_input);

    let option_setTimeCheck_0 = document.createElement('option');
    option_setTimeCheck_0.selected = true;
    option_setTimeCheck_0.disabled = true;
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

    let box_div_showTime_showActiveTime = document.createElement('div');
    box_div_showTime_showActiveTime.setAttribute('class','d-flex my-2 w-100')
    setCheckNameRoundDay_div.appendChild(box_div_showTime_showActiveTime);

    let div_showTime = document.createElement('div');
    div_showTime.setAttribute('class','col-6 d-flex flex-column my-2 border border-danger');
    div_showTime.setAttribute('id','divShowTimeToUser');
    box_div_showTime_showActiveTime.appendChild(div_showTime);

    let div_showActiveTime = document.createElement('div');
    div_showActiveTime.setAttribute('class','col-6 d-flex flex-column my-2 border border-primary pt-2 px-5');
    div_showActiveTime.setAttribute('id','divShowActiveTimeToUser');
    box_div_showTime_showActiveTime.appendChild(div_showActiveTime);


    $(document).ready(function () {
        $('.datepicker').datepicker({
            format: "dd-mm-yyyy",
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
        if (deleteDiv && previousDiv) {
            if (previousDiv) {
                console.log(previousDiv)
                previousDiv.classList.remove('border-bottom');
                previousDiv.classList.remove('border-success');
                previousDiv.classList.remove('border-3');
            }
        }
        deleteDiv.remove();
        counter--;
    }
}


function changeSystem(clickedId_ChangeSystem) {
    if (isNaN(clickedId_ChangeSystem)) {
        let changeSystem = document.getElementById(clickedId_ChangeSystem);
        let changeColorText1 = document.getElementById('text1');
        let changeColorText2 = document.getElementById('text2');
        let prInSides = document.getElementById('prInSide')
        let prOutSides = document.getElementById('prOutSide')
        if (changeSystem.classList.contains('fa-arrow-left')) {
            changeSystem.classList.remove('fa-arrow-left');
            changeSystem.classList.add('fa-arrow-right');
            changeColorText1.classList.remove('text-success');
            changeColorText2.classList.add('text-success');
            prInSides.classList.add('d-none')
            prOutSides.classList.remove('d-none');
        } else {
            changeSystem.classList.remove('fa-arrow-right');
            changeSystem.classList.add('fa-arrow-left');
            changeColorText2.classList.remove('text-success');
            changeColorText1.classList.add('text-success');
            prOutSides.classList.add('d-none');
            prInSides.classList.remove('d-none')
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
            div_noHaDataIS.classList.add('d-none');
        } else if (chooseMoTpDataIS === (id = radiosISnoHaveData)) {
            console.log('no')
            div_noHaDataIS.classList.remove('d-none');
            div_HaDataIS.classList.add('d-none');
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
            div_noHaDataOS.classList.add('d-none');
        } else if (chooseMoTpDataOS === (id = radiosOSnoHaveData)) {
            console.log('no')
            div_noHaDataOS.classList.remove('d-none');
            div_HaDataOS.classList.add('d-none');
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
        console.log('inif = ' + clickedId_IdsetCheckName);
        console.log(' = ' + getIdlinks);
        let setCheckName = document.getElementById(clickedId_IdsetCheckName);
        let div_Rounddays = document.getElementById('CheckName_setCheckNameRoundDay'+getIdlinks);
        let div_Alldays = document.getElementById('CheckName_allDay'+getIdlinks);
        console.log(setCheckName.id);
        if(setCheckName.id === 'setCheckNameI' + getIdlinks){
            div_Alldays.classList.remove('d-none');
            div_Rounddays.classList.add('d-none');
        }else if(setCheckName.id === 'setCheckNameII' + getIdlinks){  
            div_Rounddays.classList.remove('d-none');
            div_Alldays.classList.add('d-none');
        }else{
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
    } else if(event.target.classList.contains('get_IdselectRound')) {
        
        let changedId_IdselectRound = event.target;
        console.log('คุณคลิกที่องค์ประกอบที่มี id: ' + changedId_IdselectRound);

        createSelectOptions(event);
    }else if(event.target.classList.contains('get_IdInputTime')) {
        
        let changedId_IdselectRound = event.target;
        console.log('คุณคลิกที่องค์ประกอบที่มี id: ' + changedId_IdselectRound);

        getTime(changedId_IdselectRound);
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
        if (selectedOptions === 'เลือกสังกัดหรือเลือกทั้งหมด'){
            divNewSelecte.removeChild(div_Support);
        }else if (!div_Support) {
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
    }else if(selectedOptionId === 'selectSupport'){
        console.log(':#')
    }

}

function createSelectOptions(event) {
    // เลือก element ที่มี id เพื่อนำมาลบทิ้ง (ถ้ามี)
    let divShowTimeToUsers = document.getElementById('divShowTimeToUser');
    // ลบ select ที่มี id เป็น dynamicSelect ทิ้งทั้งหมด
    var existingSelects = document.querySelectorAll('[id^=dynamicSelect]');
    existingSelects.forEach(select => {
        select.remove();
    });

    // ลบ label ที่มี id เป็น dynamicLabel ทิ้งทั้งหมด
    var existingLabels = document.querySelectorAll('[id^=dynamicLabel]');
    existingLabels.forEach(label => {
        label.remove();
    });

    // ลบ inputBox ที่มี id เป็น dynamicBoxinput ทิ้งทั้งหมด
    var existingBoxInput = document.querySelectorAll('[id^=dynamicBoxinput]');
    existingBoxInput.forEach(input => {
        input.remove();
    });


  
    let valueIdselectRound = event.target.value;
    var select = document.createElement('select');
    select.id = 'dynamicSelect'+x;

    var div_Showinput = document.getElementById('divShowActiveTimeToUser');
    for(var x = 0; x <= (valueIdselectRound-1);x++){

        var label = document.createElement('label');
        label.setAttribute('class','form-label fw-bold text-green');
        label.setAttribute('for','dynamicSelect'+x);
        label.id = 'dynamicLabel'+x;
        label.textContent = 'การเช็คชื่อรอบที่ '+ (x+1);

        var select = document.createElement('select');
        select.setAttribute('class','form-select mb-3 w-75 ms-3');
        select.id = 'dynamicSelect'+x;

        var optionTitle = document.createElement('option');
        optionTitle.value = 0;
        optionTitle.text = 'หลังเข้าเรียน';
        select.appendChild(optionTitle);


        var inputBox = document.createElement('input');
        inputBox.setAttribute('class','form-control my-4 bg-disable')
        inputBox.disabled = true;
        inputBox.value = "รอแปปนะ";
        inputBox.id = 'dynamicBoxinput'+x;
        div_Showinput.appendChild(inputBox);

        for (var i = 1; i <= valueIdselectRound; i++) {
            var option = document.createElement('option');
            option.value = i;
            option.text = 'ถึงเวลา '+i;
            select.appendChild(option);
          }
          divShowTimeToUsers.appendChild(label);
          divShowTimeToUsers.appendChild(select);
    }

  }

function getTime(changedId_IdselectRound){
    let allTime = changedId_IdselectRound.id;
    let valueAllTime = changedId_IdselectRound.value;
    console.log('id = '+allTime);
    console.log('value = '+valueAllTime);
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
