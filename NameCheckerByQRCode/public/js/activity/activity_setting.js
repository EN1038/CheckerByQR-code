let counter = 0;

function addInput(){
    let inputContainer = document.getElementById('inputContainer');

    let inputWrapper = document.createElement('div');
    inputWrapper.setAttribute('id','input-warpper'+counter);
    inputWrapper.setAttribute('class','d-flex flex-column mb-4')

    if (counter > 0) {
        let previousInputWrapper = document.getElementById('input-warpper' + (counter - 1));
        let inputsInsideWrapper = previousInputWrapper.getElementsByTagName('input');
        let selectInsideWrapper = previousInputWrapper.getElementsByTagName('select');
        let iconInsideWrapper = previousInputWrapper.getElementsByClassName('icon')[0];
        if (previousInputWrapper){
            previousInputWrapper.classList.add('bg-disable');
        }
        for (let i = 0; i < inputsInsideWrapper.length; i++) {
            inputsInsideWrapper[i].disabled = true;
        }
        for (let i = 0; i < selectInsideWrapper.length; i++) {
            selectInsideWrapper[i].disabled = true;
        }
        if (iconInsideWrapper) {
            iconInsideWrapper.classList.remove('icon');
            iconInsideWrapper.classList.add('icon-disable');
        }
    }

    let inputDive1 = document.createElement('div');
    inputDive1.setAttribute('class','d-flex flex-row justify-content-center align-items-center mb-3');

    let inputDive2 = document.createElement('div');
    inputDive2.setAttribute('class','d-flex flex-row justify-content-center align-items-center mb-5');

    let inputDive3 = document.createElement('div');
    inputDive3.setAttribute('class','d-flex flex-row text-center mb-3');

    let inputDive4 = document.createElement('div');
    inputDive4.setAttribute('id','divPersonInSide'+counter);
    inputDive4.setAttribute('class','d-flex flex-row justify-content-center align-items-center mb-3 d-none');

    let inputDive5 = document.createElement('div');
    inputDive5.setAttribute('id','divPersonOutSide'+counter);
    inputDive5.setAttribute('class','d-flex flex-row justify-content-center align-items-center mb-3 ');

    let date_activity_div = document.createElement('div_date');
    date_activity_div.setAttribute('class','col-6');

    let timeStart_activity_div = document.createElement('div_time_start');
    timeStart_activity_div.setAttribute('class','col-3 px-3');

    let timeEnd_activity_div = document.createElement('div_time_start');
    timeEnd_activity_div.setAttribute('class','col-3 px-3');

    let selecteTimeChecker_activity_div = document.createElement('div_selecteTimeChecker');
    selecteTimeChecker_activity_div.setAttribute('class','col px-3');

    let timeChecking_activity_div = document.createElement('div_timeChecking');
    timeChecking_activity_div.setAttribute('class','col px-3');

    let btnChangMode_activity_div = document.createElement('div_radioBtn');
    btnChangMode_activity_div.setAttribute('class','col icon px-3');

    let loginInSide_activity_div = document.createElement('div_loginInSide');
    loginInSide_activity_div.setAttribute('class','col px-3');

    let loginOutSide_activity_div = document.createElement('div_loginOutSide');
    loginOutSide_activity_div.setAttribute('class','col px-3');

    let date_input_label = document.createElement('label');
    date_input_label.setAttribute('class','form-label');
    date_input_label.textContent = "วันเดือนปี";
    date_activity_div.appendChild(date_input_label)

    let timeStart_input_label = document.createElement('label');
    timeStart_input_label.setAttribute('class','form-label');
    timeStart_input_label.textContent = "เวลาเริ่ม";
    timeStart_activity_div.appendChild(timeStart_input_label)

    let timeEnd_input_label = document.createElement('label');
    timeEnd_input_label.setAttribute('class','form-label');
    timeEnd_input_label.textContent = "เวลาจบ";
    timeEnd_activity_div.appendChild(timeEnd_input_label)

    let select_input_label = document.createElement('label');
    select_input_label.setAttribute('class','form-label');
    select_input_label.textContent = "เวลาเช็คชื่อ";
    selecteTimeChecker_activity_div.appendChild(select_input_label);

    let timeChecking_input_label = document.createElement('label');
    timeChecking_input_label.setAttribute('class','form-label');
    timeChecking_input_label.textContent = "ระยะเวลาในการเช็คชื่อ";
    timeChecking_activity_div.appendChild(timeChecking_input_label);

    let date_input = document.createElement('input');
    date_input.setAttribute('class','form-control datepicker');
    date_input.setAttribute('type','text');
    date_input.setAttribute('name','date_input['+counter+']');
    date_input.setAttribute('id','date_input'+counter);
    date_activity_div.appendChild(date_input);

    let timeStart_input = document.createElement('input');
    timeStart_input.setAttribute('class','form-control ');
    timeStart_input.setAttribute('type','time');
    timeStart_input.setAttribute('name','timeStart_input['+counter+']');
    timeStart_input.setAttribute('id','timeStart_input'+counter);
    timeStart_activity_div.appendChild(timeStart_input);

    let timeEnd_input = document.createElement('input');
    timeEnd_input.setAttribute('class','form-control ');
    timeEnd_input.setAttribute('type','time');
    timeEnd_input.setAttribute('name','timeEnd_input['+counter+']');
    timeEnd_input.setAttribute('id','timeEnd_input'+counter);
    timeEnd_activity_div.appendChild(timeEnd_input);
    
    
    let selectedTimeChecker_input = document.createElement('select');
    selectedTimeChecker_input.setAttribute('class','form-select');
    selectedTimeChecker_input.setAttribute('type','text');
    selectedTimeChecker_input.setAttribute('name','selectedTimeChecker_input['+counter+']');
    selectedTimeChecker_input.setAttribute('id','selectedTimeChecker_input'+counter);
    selecteTimeChecker_activity_div.appendChild(selectedTimeChecker_input);

    let label = document.createElement('option') 
    label.text = 'กรุณาโปรดเลือก';
    label.disabled = true;
    label.selected = true;
    selectedTimeChecker_input.appendChild(label);

    let options_AfterTiStart = document.createElement('option') 
    options_AfterTiStart.value = '1';
    options_AfterTiStart.text = 'หลังเริ่ม';
    selectedTimeChecker_input.appendChild(options_AfterTiStart);

    let options_During = document.createElement('option') 
    options_During.value = '2';
    options_During.text = 'ระหว่าง';
    selectedTimeChecker_input.appendChild(options_During);

    let options_BeforeTiEnd = document.createElement('option') 
    options_BeforeTiEnd.value = '3';
    options_BeforeTiEnd.text = 'ก่อนจบ';
    selectedTimeChecker_input.appendChild(options_BeforeTiEnd);

    let timeCheckeing_input = document.createElement('input');
    timeCheckeing_input.setAttribute('class','form-control ');
    timeCheckeing_input.setAttribute('type','time');
    timeCheckeing_input.setAttribute('name','timeCheckeing_input['+counter+']');
    timeCheckeing_input.setAttribute('id','timeCheckeing_input'+counter);
    timeChecking_activity_div.appendChild(timeCheckeing_input);

    let labelx = document.createElement('label');
    labelx.setAttribute('class','form-label d-flex flex-row justiflt-content-start fs-7');
    labelx.textContent = "กรุณากดที่ลูกศรเพื่อเลือกรูปแบบการเช็คชื่อ";
    btnChangMode_activity_div.appendChild(labelx);
    let lineBreak = document.createElement('br');
    btnChangMode_activity_div.appendChild(lineBreak);

    let textLeft = document.createElement('span');
    textLeft.setAttribute('class','fs-1 me-5');
    textLeft.textContent = 'บุคคลภายใน';
    btnChangMode_activity_div.appendChild(textLeft);

    let btnChangMode = document.createElement('i');
    btnChangMode.setAttribute('class','btn btn-success fa-solid fa-arrow-right');
    btnChangMode.setAttribute('id','iconChangeMode'+counter);
    btnChangMode.setAttribute('onclick', 'changeMode()');
    btnChangMode_activity_div.appendChild(btnChangMode);

    let textRight = document.createElement('span');
    textRight.setAttribute('class','fs-1 ms-5');
    textRight.textContent = 'บุคคลภายนอก';
    btnChangMode_activity_div.appendChild(textRight);

    let loginInSide = document.createElement('span');
    loginInSide.setAttribute('class','fs-3');
    loginInSide.textContent = 'ล็อกอินภายในระบบ';
    loginInSide_activity_div.appendChild(loginInSide);

    let detail_LoginInSide = document.createElement('p');
    detail_LoginInSide.setAttribute('class','fs-5 text-center');
    detail_LoginInSide.textContent = 'รอข้อมูล';
    loginInSide_activity_div.appendChild(detail_LoginInSide);

    let loginOutSide = document.createElement('p');
    loginOutSide.setAttribute('class','fs-3');
    loginOutSide.textContent = 'ล็อกอินนอกระบบ';
    loginOutSide_activity_div.appendChild(loginOutSide);

    let formCheck1 = document.createElement('div');
    formCheck1.setAttribute('class','form-check form-check-inline')
    loginOutSide_activity_div.appendChild(formCheck1);

    let inputFormCheck1 = document.createElement('input');
    inputFormCheck1.setAttribute('class','form-check-input');
    inputFormCheck1.setAttribute('type','radio');
    inputFormCheck1.setAttribute('name','inlineRadioOptions');
    inputFormCheck1.setAttribute('id','inlineRadio1'+counter);
    inputFormCheck1.setAttribute('value','option1');
    inputFormCheck1.setAttribute('onclick', 'chageModeLoginOutSide()');
    formCheck1.appendChild(inputFormCheck1);

    let labelFormCheck1 = document.createElement('label');
    labelFormCheck1.setAttribute('class','form-check-label');
    labelFormCheck1.setAttribute('for','inlineRadio1'+counter);
    labelFormCheck1.textContent = 'มีรายชื่อ';
    formCheck1.appendChild(labelFormCheck1);

    let formCheck2 = document.createElement('div');
    formCheck2.setAttribute('class','form-check form-check-inline')
    loginOutSide_activity_div.appendChild(formCheck2);

    let inputFormCheck2 = document.createElement('input');
    inputFormCheck2.setAttribute('class','form-check-input');
    inputFormCheck2.setAttribute('type','radio');
    inputFormCheck2.setAttribute('name','inlineRadioOptions');
    inputFormCheck2.setAttribute('id','inlineRadio2'+counter);
    inputFormCheck2.setAttribute('value','option2');
    inputFormCheck2.setAttribute('onclick', 'chageModeLoginOutSide()');
    formCheck2.appendChild(inputFormCheck2);

    let labelFormCheck2 = document.createElement('label');
    labelFormCheck2.setAttribute('class','form-check-label');
    labelFormCheck2.setAttribute('for','inlineRadio2'+counter);
    labelFormCheck2.textContent = 'ไม่มีรายชื่อ';
    formCheck2.appendChild(labelFormCheck2);

    let textAlert = document.createElement('p');
    textAlert.setAttribute('class','fs-4 text-center mt-5');
    textAlert.setAttribute('id','textAlert'+counter);
    textAlert.textContent = 'โปรดเลือกรูปแบบการล็อกอินนอกระบบ';
    loginOutSide_activity_div.appendChild(textAlert);

    let bigDiv_haveListName = document.createElement('div');
    bigDiv_haveListName.setAttribute('class','mb-5 d-none');
    bigDiv_haveListName.setAttribute('id','bigdiv_haveListName'+counter);
    loginOutSide_activity_div.appendChild(bigDiv_haveListName);

    let label_haveListName = document.createElement('label');
    label_haveListName.setAttribute('class','form-label mt-2');
    label_haveListName.textContent = 'โปรดเลือกไฟล์ Excel จากในเครื่อง';
    bigDiv_haveListName.appendChild(label_haveListName);

    let div_haveListName = document.createElement('div');
    div_haveListName.setAttribute('class','input-group mb-5 d-none');
    div_haveListName.setAttribute('id','div_haveListName');
    bigDiv_haveListName.appendChild(div_haveListName);

    let haveListName_input = document.createElement('input');
    haveListName_input.setAttribute('type','file');
    haveListName_input.setAttribute('class','form-control w-75');
    haveListName_input.setAttribute('id','inputGroupFile04');
    haveListName_input.setAttribute('aria-describedby','inputGroupFileAddon04');
    haveListName_input.setAttribute('aria-label','Upload');
    bigDiv_haveListName.appendChild(haveListName_input);

    let divLink_HaveListName = document.createElement('p');
    divLink_HaveListName.setAttribute('class','fs-6 mt-3');
    divLink_HaveListName.textContent = 'ตัวอย่างรูปแบบไฟล์ Excel : ';
    bigDiv_haveListName.appendChild(divLink_HaveListName);

    let link_HaveListName = document.createElement('a');
    link_HaveListName.setAttribute('class','fs-6');
    link_HaveListName.setAttribute('href','#');
    link_HaveListName.textContent = 'กดเพื่อดาวโหลดไฟล์ตัวอย่าง';
    divLink_HaveListName.appendChild(link_HaveListName);

    let div_noHaveListName = document.createElement('div');
    div_noHaveListName.setAttribute('class','mb-5 d-none');
    div_noHaveListName.setAttribute('id','div_noHaveListName'+counter);
    loginOutSide_activity_div.appendChild(div_noHaveListName);

    let textAlert_noHaveListName = document.createElement('p');
    textAlert_noHaveListName.setAttribute('class','fs-4 text-center mt-5');
    textAlert_noHaveListName.textContent = 'คุณเลือกรูปแบบการล็อกอินนอกระบบแบบไม่มีรายชื่อ';
    div_noHaveListName.appendChild(textAlert_noHaveListName);

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
    inputDive2.appendChild(selecteTimeChecker_activity_div);
    inputDive2.appendChild(timeChecking_activity_div);
    inputDive3.appendChild(btnChangMode_activity_div);
    inputDive4.appendChild(loginInSide_activity_div);
    inputDive5.appendChild(loginOutSide_activity_div);
    inputWrapper.appendChild(inputDive1);
    inputWrapper.appendChild(inputDive2);
    inputWrapper.appendChild(inputDive3);
    inputWrapper.appendChild(inputDive4);
    inputWrapper.appendChild(inputDive5);
    inputContainer.appendChild(inputWrapper);
    counter++
    changeMode(counter);
    chageModeLoginOutSide(counter);
}

function changeMode(){
    let arrowIcon = document.getElementById('iconChangeMode'+(counter-1));
    let div4 = document.getElementById('divPersonInSide'+(counter-1));
    let div5 = document.getElementById('divPersonOutSide'+(counter-1));

    if(arrowIcon.classList.contains('fa-arrow-right')){
        arrowIcon.classList.remove('fa-arrow-right');
        arrowIcon.classList.add('fa-arrow-left');
        div5.classList.toggle('d-none');
        div4.classList.toggle('d-none');
    }else {
        arrowIcon.classList.remove('fa-arrow-left');
        arrowIcon.classList.add('fa-arrow-right');
        div5.classList.toggle('d-none');
        div4.classList.toggle('d-none');
    }


}

function chageModeLoginOutSide(){
    let haveListName = document.getElementById('inlineRadio1'+(counter-1));
    let noHaveListName = document.getElementById('inlineRadio2'+(counter-1));
    let div_haveListNames = document.getElementById('bigdiv_haveListName'+(counter-1));
    let div_noHaveListNames = document.getElementById('div_noHaveListName'+(counter-1));
    let textAlerts = document.getElementById('textAlert'+(counter-1));

    if(noHaveListName.checked){
        textAlerts.classList.add('d-none');
        div_haveListNames.classList.add('d-none');
        div_noHaveListNames.classList.remove('d-none');
    }else if(haveListName.checked){
        textAlerts.classList.add('d-none');
        div_haveListNames.classList.remove('d-none');
        div_noHaveListNames.classList.add('d-none');
    }else{
        textAlerts.classList.remove('d-none');
        div_haveListNames.classList.add('d-none');
        div_noHaveListNames.classList.add('d-none');
    }
}