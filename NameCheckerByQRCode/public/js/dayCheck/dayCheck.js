const itemsPerPage = 10; // หรือค่าที่คุณต้องการจะกำหนด
let currentPage = 1; // หรือค่าเริ่มต้นที่ต้องการ


// Function to display the selected page
function displayPage(pageNumber, data) {
  const startIndex = (pageNumber - 1) * itemsPerPage;
  const endIndex = startIndex + itemsPerPage;
  const tableBody = document.getElementById('dataTable').getElementsByTagName('tbody')[0];
  tableBody.innerHTML = '';
  
  for (let i = startIndex; i < endIndex && i < data.length; i++) {
      const row = tableBody.insertRow();
      const nameCell = row.insertCell(0);
      const dateCell = row.insertCell(1);

      let createdAt = new Date(data[i].created_at); // แปลงเวลาให้อยู่ในรูปแบบของ Object Date
      let hours = createdAt.getHours().toString().padStart(2, '0');
      let minutes = createdAt.getMinutes().toString().padStart(2, '0');
      let seconds = createdAt.getSeconds().toString().padStart(2, '0');
      let time = hours + ':' + minutes + ':' + seconds;

      nameCell.textContent = data[i].name;
      dateCell.textContent = time;
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

// getDataofRound('/api/activity/people-name-register-data/3/46/33')
//   .then(data => {
//     if (data) {
//         displayPage(1, data);
//         updatePagination(data);
//     } else {
//         console.error('Unable to fetch data. Please try again later.');
//     }
//   })
//   .catch(error => {
//     console.error('There was a problem:', error);
//   });


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

function showDetail(){
  let btn_detail = document.getElementById('btn_detail');
  let btn_detail_id = btn_detail.dataset.id;
  let btn_detail_iddate = btn_detail.dataset.iddate;
  let btn_detail_idactivity = btn_detail.dataset.idactivity;
  console.log(btn_detail)
  let textApi = `/api/activity/people-name-register-data/4/${btn_detail_iddate}/${btn_detail_id}`;
  
  getDataofRound(textApi);
}

// function showAndHide(){
//   let divData = document.getElementById('divData');
//   if(divData.classList === 'd-none'){
//     divData.classList.remove('d-none');
//   }else{
//     divData.classList.add('d-none');
//   }
// }



