document.addEventListener('DOMContentLoaded', function () {
    var openReportModalBtn = document.getElementById('openReportModalBtn');
    var reportModal = document.getElementById('reportModal');
    var closeReportModalBtn = document.getElementById('closeReportModalBtn');
    var header = document.getElementById('header');
  
    openReportModalBtn.addEventListener('click', function (event) {
      event.stopPropagation(); // Mencegah event click menyebar ke elemen lain
      reportModal.style.display = 'block';
      header.style.zIndex = '0';
      
    });

    closeReportModalBtn.addEventListener('click', function () {
      reportModal.style.display = 'none';
    });

    window.addEventListener('click', function (event) {
      if (event.target == reportModal) {
        reportModal.style.display = 'none';
      }
    });
});
