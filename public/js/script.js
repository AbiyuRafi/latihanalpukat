const body = document.querySelector("body"),
  sidebar = body.querySelector(".sidebar"),
  toggle = body.querySelector(".toggle"),
  searchBtn = body.querySelector(".search-box"),
  modeSwitch = body.querySelector(".toggle-switch"),
  modeText = body.querySelector(".mode-text");

toggle.addEventListener("click", () => {
  sidebar.classList.toggle("close");
});


modeSwitch.addEventListener("click", () => {
  body.classList.toggle("dark");

  if (body.classList.contains("dark")) {
    modeText.innerText = "Light Mode"
  }else{
    modeText.innerText = "Dark Mode"
  }

});

let hill1 = document.getElementsByClassName("hill1")[0];
let hill2 = document.getElementsByClassName("hill2")[0];
let hill3 = document.getElementsByClassName("hill3")[0];
let hill4 = document.getElementsByClassName("hill4")[0];

window.addEventListener('scroll', function() {
  let value = window.scrollY;

  hill1.style.bottom = value * 0.9 + 'px';
  hill2.style.right = value * 0.7 + 'px';
  hill3.style.left = value * 0.7 + 'px';
  hill4.style.right = value * 0.6 + 'px';
});


