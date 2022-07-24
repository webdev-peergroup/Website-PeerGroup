const sideMenu = document.querySelector("aside");
const menuBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");
// const themeToggle = document.querySelector(".theme-toggler");
const date = document.getElementById("date-filter");
const dateKegiatan = document.getElementById("date-filter-kegiatan");
const container = document.getElementById('recent-post');
const containerKegiatan = document.getElementById('recent-post-kegiatan');
// let darkMode = localStorage.getItem("darkMode");
const addButton = document.getElementById("add-item");
const closePop = document.getElementById('close-modal');

// Show sidebar
menuBtn.addEventListener("click", () => {
    sideMenu.style.display = "block";
})

// Close sidebar
closeBtn.addEventListener("click", () => {
    sideMenu.style.display = "none";
})

//Tombol Tambah
addButton.addEventListener('click', () => {
    document.querySelector('.bg-modal').style.display = 'flex';
});

//Tombol close popup
closePop.addEventListener('click', () => {
    document.querySelector('.bg-modal').style.display = 'none';
    // console.log(closePop);
})

//Buat AJAX
var xhr = new XMLHttpRequest();
//Date Pick
date.addEventListener('change', () => {
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            container.innerHTML = xhr.responseText;
        }
    }
    xhr.open('GET', 'admin-panel/ajax/'+ date.value, true);
    xhr.send();
})

dateKegiatan.addEventListener('change', () => {
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            containerKegiatan.innerHTML = xhr.responseText;
        }
    }
    xhr.open('GET', 'admin-panel/ajax-kegiatan/'+ date.value, true);
    xhr.send();
})