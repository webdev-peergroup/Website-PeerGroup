//Darkmode Toggle Button
const penulis = document.querySelector('.author');
const date = document.querySelector('.date');
const sumber = document.querySelector('.sumber');
const text = document.querySelector('.text');
const author = document.querySelector('.author-name');

chk.addEventListener('change', () => {
    dark()
});

function dark() {
    document.body.classList.toggle('dark');
    penulis.classList.toggle('dark');
    date.classList.toggle('dark');
    sumber.classList.toggle('dark');
    text.classList.toggle('dark');
    author.classList.toggle('dark');
}