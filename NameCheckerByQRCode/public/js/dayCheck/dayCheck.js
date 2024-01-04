const itemsPerPage = 10; // หรือค่าที่คุณต้องการจะกำหนด
let currentPage = 1; // หรือค่าเริ่มต้นที่ต้องการ


// Function to display the selected page
function displayPage(pageNumber, data) {
  const startIndex = (pageNumber - 1) * itemsPerPage;
  const endIndex = startIndex + itemsPerPage;
  const tableBody = document.getElementById('dataTable').getElementsByTagName('tbody')[0];
  tableBody.innerHTML = '';
  const tableThead = document.getElementById('dataTable').getElementsByTagName('thead')[0];
  let idUser_Cells = tableThead.getElementsByTagName('th')[0];
  let lastName_Cells = tableThead.getElementsByTagName('th')[2];
  let num_namelasCell;
  let num_fsName;
  let num_idUser;
      if(idUser_Cells.classList.contains('d-none')){
        console.log('idUser have d-none');
        num_namelasCell = 2;
        num_fsName = 1;
        num_idUser = undefined;
      }else if(lastName_Cells.classList.contains('d-none')){
        console.log('lastName have d-none');
        num_fsName = 2;
        num_namelasCell = undefined;
        num_idUser = 1;
      }else{
        console.log('error')
      }
  
  for (let i = startIndex; i < endIndex && i < data.length; i++) {
      const row = tableBody.insertRow();
      const titleResponsive = row.insertCell(0); //null
      const idUserCell = row.insertCell(num_idUser); //1
      const namefsCell = row.insertCell(num_fsName); //2
      const namelasCell = row.insertCell(num_namelasCell); //' '
      const dateCell = row.insertCell(3); //3
      const statusCell = row.insertCell(4); //4

      let createdAt = new Date(data[i].created_at); // แปลงเวลาให้อยู่ในรูปแบบของ Object Date
      let hours = createdAt.getHours().toString().padStart(2, '0');
      let minutes = createdAt.getMinutes().toString().padStart(2, '0');
      let seconds = createdAt.getSeconds().toString().padStart(2, '0');
      let time = hours + ':' + minutes + ':' + seconds;

      let checkstatus = data[i].status;
      let statusNormal;
      let statusLate;
      let statusOn;

      if(checkstatus === 'normal'){
        statusNormal = 'เข้าเวลาปกติ';
      }else if(checkstatus === 'late'){
        statusLate = 'เข้าสาย';
      }else if(checkstatus === 'on'){
        statusOn = 'ชื่ออยู่ในระบบ';
      }

      if(statusNormal){
        titleResponsive.textContent = 'สถานะ '+statusNormal;
        titleResponsive.classList.add('text-success');
      }else if(statusLate){
        titleResponsive.textContent = 'สถานะ '+statusLate;
        titleResponsive.classList.add('text-danger');
      }else if(statusOn){
        titleResponsive.textContent = 'สถานะ '+statusOn;
        titleResponsive.classList.add('text-primary');
      }else{
        titleResponsive.textContent = 'Error';
      }

      idUserCell.textContent = data[i].student_id;
      idUserCell.dataset.label = 'รหัส';
      namefsCell.textContent = data[i].name;
      namefsCell.dataset.label = 'ชื่อจริง';

      namelasCell.textContent = data[i].last_name;
      namelasCell.dataset.label = 'นามสกุล';
     
      dateCell.textContent = time;
      dateCell.dataset.label = 'เวลาที่เข้าเช็ค';
      statusCell.textContent = data[i].status;
      if(statusNormal){
        statusCell.textContent = statusNormal;
        statusCell.classList.add('text-success');
      }else if(statusLate){
        statusCell.textContent = statusLate;
        statusCell.classList.add('text-danger');
      }else if(statusOn){
        statusCell.textContent = statusOn;
        statusCell.classList.add('text-primay');
      }else{
        statusCell.textContent = 'Error';
      }
      statusCell.dataset.label = 'สถานะ';
      // console.log(data[i].created_at);
  }
}


function getDataofRound(url) {
  return fetch(url)
      .then(response => {
          if (!response.ok) {
              throw new Error('Network response was not ok');
          }
          return response.json();
      })
      .then(data => {
        if (data) {
            displayPage(1, data);
            updatePagination(data);
        } else {
            console.error('Unable to fetch data. Please try again later.');
        }
      })
      .catch(error => {
          console.error('There was a problem with the fetch operation:', error);
          throw error; // หรือคุณสามารถ return null หรือข้อมูลที่เป็นค่าเริ่มต้นได้
      });
}



// Function to update pagination links
function updatePagination(data) {
    const totalPages = Math.ceil(data.length / itemsPerPage);
    const pagination = document.getElementById('pagination');
    pagination.innerHTML = '';

    const prevPage = currentPage > 1 ? currentPage - 1 : 1;
    const nextPage = currentPage < totalPages ? currentPage + 1 : totalPages;

    const createPageButton = (pageNum) => {
        const li = document.createElement('li');
        li.classList.add('page-item');
        const link = document.createElement('a');
        link.classList.add('page-link', 'edit-pagination');
        link.href = '#';
        link.textContent = pageNum;

        link.addEventListener('click', () => {
            currentPage = pageNum;
            displayPage(currentPage, data);
            updatePagination(data);
            let search = document.getElementById('searchInput');
            search.value = '';
        });

        if (pageNum === currentPage) {
            link.classList.add('active');
        }

        li.appendChild(link);
        return li;
    };

    // Previous Button
    const prevButton = document.createElement('li');
    prevButton.classList.add('page-item');
    const prevLink = document.createElement('a');
    prevLink.classList.add('page-link', 'edit-pagination');
    prevLink.href = '#';
    prevLink.textContent = 'ก่อนหน้า';
    prevButton.appendChild(prevLink);

    if (currentPage === 1) {
        prevButton.classList.add('disabled');
    } else {
        prevLink.addEventListener('click', () => {
            currentPage = prevPage;
            displayPage(currentPage, data);
            updatePagination(data);
            let search = document.getElementById('searchInput');
            search.value = '';
        });
    }

    pagination.appendChild(prevButton);

    // Middle Buttons
    if (currentPage > 3) {
        pagination.appendChild(createPageButton(1));
        const span = document.createElement('span');
        span.classList.add('upgrade-spanpagination');
        span.textContent = '...';
        pagination.appendChild(span);
    }

    for (let i = Math.max(1, currentPage - 1); i <= Math.min(currentPage + 1, totalPages); i++) {
        pagination.appendChild(createPageButton(i));
    }

    if (currentPage < totalPages - 2) {
        const span = document.createElement('span');
        span.classList.add('upgrade-spanpagination');
        span.textContent = '...';
        pagination.appendChild(span);
        pagination.appendChild(createPageButton(totalPages));
    }

    // Next Button
    const nextButton = document.createElement('li');
    nextButton.classList.add('page-item');
    const nextLink = document.createElement('a');
    nextLink.classList.add('page-link', 'edit-pagination');
    nextLink.href = '#';
    nextLink.textContent = 'ถัดไป';
    nextButton.appendChild(nextLink);

    if (currentPage === totalPages) {
        nextButton.classList.add('disabled');
    } else {
        nextLink.addEventListener('click', () => {
            currentPage = nextPage;
            displayPage(currentPage, data);
            updatePagination(data);
            let search = document.getElementById('searchInput');
            search.value = '';
        });
    }

    pagination.appendChild(nextButton);
}


// Function to search table rows for a match in all columns
function searchTable() {
    const input = document.getElementById('searchInput');
    const filter = input.value.toLowerCase();
    const table = document.getElementById('dataTable');
    const rows = table.getElementsByTagName('tr');

    for (let i = 0; i < rows.length; i++) {
        let found = false;
        const cols = rows[i].getElementsByTagName('td');
        for (let j = 0; j < cols.length; j++) {
            const cell = cols[j];
            if (cell) {
                const textValue = cell.textContent || cell.innerText;
                if (textValue.toLowerCase().indexOf(filter) > -1) {
                    found = true;
                    break;
                }
            }
        }
        if (found) {
            rows[i].style.display = '';
        } else {
            rows[i].style.display = 'none';
        }
    }
}

document.getElementById('searchInput').addEventListener('keyup', searchTable);
// Initial display

document.addEventListener('click', function (event) {
    if (event.target.classList.contains('getid')) {
        // เข้าถึง id ของสิ่งที่ถูกคลิก
        let get = event.target;
        // console.log('คุณคลิกที่องค์ประกอบที่มี id: ' + get);
        showDetail(get);
       
    }
})

function showDetail(get){
  let btn_detail = get;
  console.log(btn_detail);
  let btn_detail_id = btn_detail.dataset.id;
  let btn_detail_iddate = btn_detail.dataset.iddate;
  let btn_detail_idactivity = btn_detail.dataset.idactivity;
  let bg_showDetail = document.getElementById('bg-showSolution');
  // console.log(btn_detail_idactivity)
  bg_showDetail.classList.add('d-none')

  fetch('/api/activity-setting/'+btn_detail_idactivity)
  .then(response => {
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    return response.json(); // แปลง response เป็น JSON
  })
  .then(data => {
    // ดำเนินการกับข้อมูลที่ได้รับ
    console.log(data);

    if(data.list_of_name_mode_id === '1'){
      // console.log('/api/activity-people/v2')

          fetch('/api/activity-people/v2/'+btn_detail_idactivity)
          .then(response => {
            if (!response.ok) {
              throw new Error('Network response was not ok');
            }
            return response.json(); // แปลง response เป็น JSON
          })
          .then(data => {
            if (data) {
              let table = document.getElementById('dataTable');
              let thead = table.getElementsByTagName('thead')[0]; 
              let idUser_Cells = thead.getElementsByTagName('th')[0];
              let lastName_Cells = thead.getElementsByTagName('th')[2];
              idUser_Cells.classList.remove('d-none');
              lastName_Cells.classList.add('d-none');
                displayPage(1, data);
                updatePagination(data);
            } else {
                console.error('Unable to fetch data. Please try again later.');
            }
          })
          .catch(error => {
            console.error('There has been a problem with your fetch operation:', error);
          });

    }else if(data.list_of_name_mode_id === '2'){
      let table = document.getElementById('dataTable');
              let thead = table.getElementsByTagName('thead')[0]; 
              let idUser_Cells = thead.getElementsByTagName('th')[0];
              let lastName_Cells = thead.getElementsByTagName('th')[2];
              idUser_Cells.classList.add('d-none');
              lastName_Cells.classList.remove('d-none');
      let textApi = `/api/activity/people-name-register-data/${btn_detail_idactivity}/${btn_detail_iddate}/${btn_detail_id}`;
      getDataofRound(textApi);
    }
  })
  .catch(error => {
    console.error('There has been a problem with your fetch operation:', error);
  });



  
}

// function showAndHide(){
//   let divData = document.getElementById('divData');
//   if(divData.classList === 'd-none'){
//     divData.classList.remove('d-none');
//   }else{
//     divData.classList.add('d-none');
//   }
// }




