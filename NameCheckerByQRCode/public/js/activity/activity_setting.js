let counter = 0;

function addInput(){
    let inputContainer = document.getElementById('inputContainer');
    let inputWrapper = document.createElement('div');
    inputWrapper.setAttribute('id','input-warpper'+counter);
    inputWrapper.classList.add('input-warpper');

    let date_activity_div = document.createElement('div');
    date_activity_div.setAttribute('class','mb-3 col-');
    
    let date_input_label = document.createElement('label');
    date_input_label.setAttribute('class','form-control');
    date_input_label.textContent = "วันเดือนปี";
    date_activity_div.appendChild(date_input_label)
    

    let date_input = document.createElement('input');
    date_input.setAttribute('class','form-control mb-3 col-6');
    date_input.setAttribute('type','date');
    date_input.setAttribute('name','date_input['+counter+']');
    date_input.setAttribute('id','date_input'+counter);
    date_activity_div.appendChild(date_input);

    inputWrapper.appendChild(date_activity_div);
    inputContainer.appendChild(inputWrapper);
    counter++
}