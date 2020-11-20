let menuBtn = document.querySelector(".ham-burger");
menuBtn.addEventListener('click', function(e){
    let navMenu = document.querySelector('main nav ul');
    navMenu.classList.toggle("show-menu");
});

let mainContent = document.querySelector("main");
mainContent.addEventListener('click', function(e){
    let navMenu = document.querySelector('main nav ul');
    navMenu.classList.remove("show-menu");
});