

document.getElementById('addDateInput').addEventListener('click', function() {
  const dateInputs = document.querySelectorAll('.date-input');
  const dates = Array.from(dateInputs).map(input => input.value);

  const lastInput = dateInputs[dateInputs.length - 1];

  if (lastInput.value !== '') {
    const newInput = document.createElement('input');
    newInput.setAttribute('type', 'date');
    newInput.setAttribute('name', 'dateInput[]');
    newInput.classList.add('date-input');

    newInput.addEventListener('change', function() {
      checkDateValidity(this, dates);
    });

    dateInputs[dateInputs.length - 1].parentElement.appendChild(newInput);
    lastInput.parentElement.appendChild(newInput);
    lastInput.disabled = true; // Disable the previous input
  }
});

function checkDateValidity(dateInput, dates) {
  const currentDate = new Date().toISOString().split('T')[0]; // Get current date in YYYY-MM-DD format
  if (dateInput.value < currentDate) {
    alert('Please select a date on or after today.');
    dateInput.value = ''; // Reset the input value
  }

  if (dates.includes(dateInput.value)) {
    alert('Please select a unique date.');
    dateInput.value = ''; // Reset the input value
  }
}

const initialInput = document.querySelector('.date-input');
initialInput.addEventListener('change', function() {
  checkDateValidity(this, []);
});

document.getElementById('removeDateInput').addEventListener('click', function() {
  const dateInputs = document.querySelectorAll('.date-input');
  const lastInput = dateInputs[dateInputs.length - 1];

  if (dateInputs.length > 1) {
    lastInput.parentElement.removeChild(lastInput);

    const previousInput = dateInputs[dateInputs.length - 2];
    previousInput.disabled = false; // Enable the previous input
  }
});

$('.datepicker').datepicker({
  format: "dd-mm-yyyy",
  language: "th",
  startDate: '0d',
});

$('.datepicker').datepicker().on('hide', function(event) {
  console.log('มีการเปลี่ยนแปลงใน input:', event.target.value);
  let button = document.createElement('button');
    button.textContent = 'ปุ่มใหม่';
    
    
});


