const nav = document.querySelector('#nav');
const logo = document.querySelector('#logo-fixed')
let navTop = nav.offsetTop;
console.log('Script On Fire:::::')
function fixedNav() {
    if (window.scrollY > navTop) {
        nav.classList.add('fixed');
        logo.style.display = "block";

    } else {
        nav.classList.remove('fixed');
        logo.style.display = "none";
    }
}

window.addEventListener('scroll', fixedNav);