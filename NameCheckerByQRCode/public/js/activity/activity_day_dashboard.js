
let detailText = document.getElementById('detailText');
  detailText.addEventListener('click', () => {
    if (detailText.style.height === '41px' || detailText.style.height === '') {
        detailText.style.height = 'auto';
        detailText.style.whiteSpace = 'normal';
    } else {
        detailText.style.height = '41px';
        detailText.style.whiteSpace = 'nowrap';
    }
    });

    function deleteSelected() {
        const checkboxes = document.querySelectorAll('.select-row:checked');
        checkboxes.forEach(checkbox => {
          checkbox.closest('tr').remove();
        });
      }
    

function clickTr(id){
    const checkbox = document.getElementById('idInput'+id);
    console.log("ไอดีของ <tr> คือ: "+checkbox.checked);
    if (checkbox.checked === false) {
        checkbox.checked = true;
    } else {
        checkbox.checked = false;
    }
    
}