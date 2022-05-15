//Darkmode Toggle Button
const title_thumbnail = document.querySelectorAll('.title-thumbnail');
const penulis = document.querySelectorAll('.penulis-artikel-home');
const tanggal = document.querySelectorAll('.tanggal-artikel-home');
const box =document.querySelectorAll('.box');
const desc = document.querySelectorAll('.thumbnail-description');
const artikel = document.getElementById('artikel');
const text_rekomen = document.querySelectorAll('.text-rekomen');

chk.addEventListener('change', () => {
    dark()
});

function dark() {
    document.body.classList.toggle('dark');
    artikel.classList.toggle('dark');
    for (i = 0; i < title_thumbnail.length; i++) {
        title_thumbnail[i].classList.toggle('dark');
        penulis[i].classList.toggle('dark-penulis-kategori');
        tanggal[i].classList.toggle('dark-tanggal-kategori');
        box[i].classList.toggle('dark-box');
        desc[i].classList.toggle('dark');
    }
    for (i = 0; i < text_rekomen.length; i++) {
        text_rekomen[i].classList.toggle('dark');
    }
}
