$(document).ready(function() {
    // for (let i = 1; i <= 50; i++) {
    //   $('#myDataTable tbody').append(`
    //     <tr>
    //       <td>Name ${i}</td>
    //       <td>Position ${i}</td>
    //       <td>Office ${i}</td>
    //       <td>${Math.floor(Math.random() * 60) + 20}</td>
    //       <td>2011/04/${i}</td>
    //       <td>$${Math.floor(Math.random() * 100000) + 50000}</td>
    //     </tr>
    //   `);
    // }

    // เรียกใช้ Datatables
    $('#myDataTable').DataTable();
  });
  


