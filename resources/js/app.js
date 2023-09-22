import './bootstrap';
import './bootstrap';
import 'bootstrap/dist/js/bootstrap';

let navAuth = document.querySelectorAll(".test")
let navLinks = document.querySelectorAll(".navText")
let navbar = document.querySelector(".navbar")
function changeColor() {
    let scrolled = window.scrollY
    if (scrolled > 40){
        navLinks.forEach(link => {
            link.style.color = "white";
        });
        navbar.style.background = "black";
        navAuth.forEach(link => {
            link.classList.add("navAuth")
        });
    }     
    else {
        navLinks.forEach(link => {
            link.style.color = "#4D4C4A";
        });
        navbar.style.background = "transparent";
        navAuth.forEach(link => {
            link.classList.remove("navAuth")
        });
    }     
}
document.addEventListener("scroll", changeColor);


