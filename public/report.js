document.addEventListener('DOMContentLoaded', function () {
    var openReportModalBtn = document.getElementById('openReportModalBtn');
    var openReport2 = document.getElementById('btnReport2');
    var reportModal = document.getElementById('reportModal');
    var popupReport2 = document.getElementById('popupReport2');
    var closeReportModalBtn = document.getElementById('closeReportModalBtn');
    var closePopup = document.getElementById('closePopup');
    var header = document.getElementById('header');
  
    openReportModalBtn.addEventListener('click', function (event) {
      event.stopPropagation(); // Mencegah event click menyebar ke elemen lain
      reportModal.style.display = 'block';
      header.style.zIndex = '0';
    });
    openReport2.addEventListener('click', function (event) {
      event.stopPropagation(); // Mencegah event click menyebar ke elemen lain
      popupReport2.style.display = 'block';
    });
  
    closeReportModalBtn.addEventListener('click', function () {
      reportModal.style.display = 'none';
    });
    closePopup.addEventListener('click', function () {
      popupReport2.style.display = 'none';
    });
  
    window.addEventListener('click', function (event) {
      if (event.target == reportModal) {
        reportModal.style.display = 'none';
      }
    });
    window.addEventListener('click', function (event) {
      if (event.target == popupReport2) {
        popupReport2.style.display = 'none';
      }
    });
});
