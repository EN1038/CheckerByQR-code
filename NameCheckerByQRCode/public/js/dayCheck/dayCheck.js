const itemsPerPage = 10; // Adjust as needed
let currentPage = 1;

// Function to display the selected page
function displayPage(pageNumber, data) {
  const startIndex = (pageNumber - 1) * itemsPerPage;
  const endIndex = startIndex + itemsPerPage;
  const tableBody = document.getElementById('dataTable').getElementsByTagName('tbody')[0];
  tableBody.innerHTML = '';

  for (let i = startIndex; i < endIndex && i < data.length; i++) {
    const row = tableBody.insertRow();
    const nameCell = row.insertCell(0);
    const ageCell = row.insertCell(1);
    // Add other cells as needed

    nameCell.textContent = data[i].name;
    ageCell.textContent = data[i].status;
    // Populate other cells
  }
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
      link.classList.add('page-link','edit-pagination');
      link.href = '#';
      link.textContent = pageNum;
  
      link.addEventListener('click', () => {
        currentPage = pageNum;
        displayPage(currentPage, data);
        updatePagination(data);
        let search = document.getElementById('searchInput');
        search.value='';
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
    prevLink.classList.add('page-link','edit-pagination');
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
        search.value='';
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
    nextLink.classList.add('page-link','edit-pagination');
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
        search.value='';
      });
    }
  
    pagination.appendChild(nextButton);
  }
  

// Example data (replace with your data)
const names = [
    "อรอุมา", "ธนพล", "วรเมธ", "สมศักดิ์", "กันต์", "นิรันดร์", "ศุภชัย", "ศิริพงษ์", "ณัฐพล", "วรากร",
    "สรวล", "จันทร์เพ็ญ", "สุรเดช", "สมชาย", "นฤบดินทร์", "ประสิทธิ์", "วรวิทย์", "อรรถพล", "สุรเชษฐ์", "ชัยวัฒน์",
    "วรเชษฐ์", "ชาตรี", "สมเด็จ", "ธนากร", "วีระพล", "สรวง", "วรพจน์", "อนันต์", "อนุวัฒน์", "วิชัย",
    "สมชาติ", "สุชาติ", "วีระชัย", "สุทธิพงษ์", "ณัฐธร", "วิเชียร", "วิวัฒน์", "ชาญชัย", "วิรุฬห์", "วิเชียรชัย",
    "วิรัตน์", "สุภาวดี", "สุวัจน์", "พงศ์ธร", "ธนภัทร", "ธนภูมิ", "สิทธิ์ชัย", "ณรงค์", "ณรงค์พล", "ศรัญญา",
    "ศุภชัย", "วิโรจน์", "สุรเดช", "ธนโชติ", "ศุภกร", "วิวิธ", "ณัฐวุฒิ", "พีรวิชญ์", "วรเมธ", "พีระพล",
    "ณัฐกฤต", "ณัฐภัทร", "ชาติชาย", "สมบูรณ์", "สุรพล", "วิโรจน์", "ณัฐภูมิ", "สิรวัฒน์", "ธนโชติ", "ธนัญชัย",
    "พงศ์ศิริ", "ศุภเกียรติ", "ธนัญญา", "ศุภโชค", "ณภัทร", "วัชรพล", "ศุภชัย", "ธนกฤต", "วราวุธ", "ศุภชัย",
    "ศุภฤทธิ์", "ณรงค์ศักดิ์", "สมบัติ", "สุทธิภาพ", "ธนภัทร", "วัชรวิทย์", "วรพล", "สรวิชญ์", "วรวิทย์", "ธนัชชัย",
    "ธนาทิพย์", "สิรวิชญ์", "ศุภฤทธิ์", "ณัฐวริศ", "ศุภฤกษ์", "ธนภัทร", "ศุภกฤต", "วิรัตน์", "สมบูรณ์", "ณัฐพล"
];
const statuses = ['มาสาย', 'มาทัน'];

function getRandomName() {
  return names[Math.floor(Math.random() * names.length)];
}

function getRandomStatus() {
  return statuses[Math.floor(Math.random() * statuses.length)];
}

const data = [];

for (let i = 0; i < 1000; i++) {
  const newData = {
    name: getRandomName(),
    status: getRandomStatus(),
  };
  data.push(newData);
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
displayPage(currentPage, data);
updatePagination(data);