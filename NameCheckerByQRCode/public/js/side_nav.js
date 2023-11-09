/* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
function closeNav() {
  var sidenav = document.getElementById("mySidenav");
  sidenav.style.width = "0";
  document.getElementById("main").style.marginLeft = "0";

  // ซ่อนทุกอิลิเมนต์ที่อยู่ใน mySidenav
  var elements = sidenav.querySelectorAll("*");
  for (var i = 0; i < elements.length; i++) {
    elements[i].style.display = "none";
  }

  var sidenav = document.getElementById("mySidenav");
  sidenav.classList.add("closed");
  setTimeout(function () {
    sidenav.classList.remove("closed");
  }, 300); // 300 milliseconds (0.3 seconds)
}


function openNav() {
  var sidenav = document.getElementById("mySidenav");
  sidenav.style.width = "250px";
  document.getElementById("main").style.marginLeft = "280px";


  // แสดงทุกอิลิเมนต์ที่อยู่ใน mySidenav
  var elements = sidenav.querySelectorAll("*");
  for (var i = 0; i < elements.length; i++) {
    elements[i].style.display = "block";
  }

  var sidenav = document.getElementById("mySidenav");
  sidenav.classList.add("opened");
  setTimeout(function () {
    sidenav.classList.remove("opened");
  }, 300); // 300 milliseconds (0.3 seconds)
}


