document.addEventListener("DOMContentLoaded", function() {
    // Fungsi untuk menentukan apakah halaman di-scroll
    function isPageScrolled() {
        return window.scrollY > 75;
    }

    // Fungsi untuk menangani perubahan scroll
    function handleScroll() {
        const body = document.body;

        // Tambahkan atau hapus kelas 'scroll' berdasarkan apakah halaman di-scroll
        if (isPageScrolled()) {
            body.classList.add('scroll');
        } else {
            body.classList.remove('scroll');
        }
    }

    // Tambahkan event listener untuk menangani scroll
    window.addEventListener('scroll', handleScroll);
});

document.addEventListener("DOMContentLoaded", function() {
    const layoutForm = document.getElementById("layout-form");

    // Function to change the layout based on radio selection
    function changeLayout() {
        const selectedLayout = document.querySelector('input[name="layout"]:checked').value;
        const imageGrid = document.getElementById("image-grid");

        // Clear existing classes to reset layout
        imageGrid.className = "image-grid";

        // Add the selected layout class
        if (selectedLayout === "irre" || selectedLayout === "ord") {
            imageGrid.classList.add(selectedLayout);
        }
    }

    // Event listener for radio change
    layoutForm.addEventListener("change", changeLayout);

    // Initial layout setup
    changeLayout();
});

const menuToggle = document.querySelector('.menu-toggle input');
const nav = document.querySelector('header ul');

menuToggle.addEventListener('click', function(){
    nav.classList.toggle('slide');
});




document.addEventListener("DOMContentLoaded", function() {
    const categories = document.querySelectorAll(".categories a");
    const images = document.querySelectorAll(".image-grid .image-item");

    // Find the category element with the class "default"
    const defaultCategoryElement = document.querySelector(".categories a.default");

    // Trigger a click event on the default category element
    if (defaultCategoryElement) {
        defaultCategoryElement.click();
    }

    categories.forEach(category => {
        category.addEventListener("click", function(event) {
            event.preventDefault();

            const selectedCategory = this.getAttribute("data-category");

            // Tampilkan atau sembunyikan gambar berdasarkan kategori
            images.forEach(image => {
                const imageCategory = image.getAttribute("data-category");
                if (selectedCategory === "all" || selectedCategory === imageCategory) {
                    image.style.display = "block";
                    image.classList.remove("hide");
                    image.classList.add("larges");
                    image.style.opacity = "1"; // Set opacity to fully visible
                } else {
                    image.style.display = "none";
                    image.classList.add("hide");
                    image.style.opacity = "0"; // Set opacity to fully transparent
                }
            });

            // Beri efek aktif pada kategori yang dipilih
            categories.forEach(cat => {
                cat.classList.remove("active");
            });
            this.classList.add("active");
        });
    });
});



// document.addEventListener("DOMContentLoaded", function() {
//     const categories = document.querySelectorAll(".categories a");
//     const images = document.querySelectorAll(".images .image");

//     categories.forEach(category => {
//         category.addEventListener("click", function(event) {
//             event.preventDefault();

//             const selectedCategory = this.getAttribute("data-category");

//             // Tampilkan atau sembunyikan gambar berdasarkan kategori dengan efek transisi
//             images.forEach(image => {
//                 const imageCategory = image.getAttribute("data-category");
//                 if (selectedCategory === "all" || selectedCategory === imageCategory) {
//                     image.classList.remove("hide");
//                 } else {
//                     image.classList.add("hide");
//                 }
//             });

//             // Beri efek aktif pada kategori yang dipilih
//             categories.forEach(cat => {
//                 cat.classList.remove("active");
//             });
//             this.classList.add("active");
//         });
//     });
// });
