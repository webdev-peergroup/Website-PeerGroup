//Darkmode Toggle Button
const aboutsiapa = document.querySelector('.aboutsiapa');
const visimisi = document.querySelector('.valueContent');
const theader = document.querySelectorAll('.theader');
chk.addEventListener('change', () => {
	dark()
});

function dark() {
    document.body.classList.toggle('dark');
    header.classList.toggle('dark');
    aboutsiapa.classList.toggle('dark');
    visimisi.classList.toggle('dark');
    for (i = 0; i < theader.length; i++) {
        theader[i].classList.toggle('dark');
    }
}
