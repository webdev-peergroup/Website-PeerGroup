/*===== MENU SHOW Y HIDDEN =====*/
const navMenu = document.getElementById('nav-menu'),
    toggleMenu = document.getElementById('nav-toggle'),
    closeMenu = document.getElementById('nav-close'),
    dropdown = document.getElementById('dropdown'),
    dropdownMenu = document.getElementById('dropdown-menu'),
    dropicon = document.getElementById('drop-icon'),
    dropdown1 = document.getElementById('dropdown1'),
    dropdownMenu1 = document.getElementById('dropdown-menu1'),
    dropicon1 = document.getElementById('drop-icon1'),
    dropdown2 = document.getElementById('dropdown2'),
    dropdownMenu2 = document.getElementById('dropdown-menu2'),
    dropicon2 = document.getElementById('drop-icon2');


// SHOW

toggleMenu.addEventListener("click", ()=>{
    navMenu.classList.toggle('show')
})

dropdown.addEventListener('click', ()=>{
    dropdownMenu.classList.toggle('drop-show');
    dropicon.classList.toggle('icon-rotate');
})

dropdown1.addEventListener('click', ()=>{
    dropdownMenu1.classList.toggle('drop-show');
    dropicon1.classList.toggle('icon-rotate');
})

dropdown2.addEventListener('click', ()=>{
    dropdownMenu2.classList.toggle('drop-show');
    dropicon2.classList.toggle('icon-rotate');
})

// HIDDEN
closeMenu.addEventListener('click', ()=>{
    navMenu.classList.remove('show')
})

/*===== MOUSEMOVE HOME IMG =====*/
document.addEventListener('mousemove', move);
function move(e){
    this.querySelectorAll('.move').forEach(layer =>{
        const speed = layer.getAttribute('data-speed')

        const x = (window.innerWidth - e.pageX*speed)/120
        const y = (window.innerHeight - e.pageY*speed)/120

        layer.style.transform = `translateX(${x}px) translateY(${y}px)`
    })
}

// Dark Mode
const toggleSwitch = document.querySelector(
  '.label input[type="checkbox"]'
);
const currentTheme = localStorage.getItem("theme");

if (currentTheme) {
  document.documentElement.setAttribute("data-theme", currentTheme);

  if (currentTheme === "dark") {
    toggleSwitch.checked = true;
  }
}

function switchTheme(event) {
  if (event.target.checked) {
    document.documentElement.setAttribute("data-theme", "dark");
    localStorage.setItem("theme", "dark");
  } else {
    document.documentElement.setAttribute("data-theme", "light");
    localStorage.setItem("theme", "light");
  }
}

toggleSwitch.addEventListener("change", switchTheme, false);