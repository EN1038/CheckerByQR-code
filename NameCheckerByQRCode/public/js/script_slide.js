// web_slide
document.addEventListener("DOMContentLoaded", function () {
  const contentSegments = document.querySelectorAll(".content-segment");

  let windowHeight = window.innerHeight;

  function checkSegmentVisibility() {
    contentSegments.forEach(function (segment) {
      const segmentTop = segment.getBoundingClientRect().top;
      if (segmentTop < windowHeight) {
        segment.classList.remove("hidden");
        segment.style.opacity = 1;
        segment.style.transform = "translateY(0)";
      }
    });
  }

  window.addEventListener("scroll", checkSegmentVisibility);

  checkSegmentVisibility(); // ตรวจสอบในที่ตรงเวลาโหลดหน้าเว็บ
});
// end_web_slide

