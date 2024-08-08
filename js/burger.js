window.onload= function() {
    let burger = document.querySelector(".burger");
    let menu = document.querySelector(".header__nav");
    let menuLinks = menu.querySelectorAll(".nav__link");
    
    burger.addEventListener("click", function () {
      menu.classList.toggle("header__nav--active");
      burger.classList.toggle("burger--active");
      document.body.classList.toggle("scroll-lock");
    });
    
    menuLinks.forEach(function (element) {
      element.addEventListener("click", function () {
        menu.classList.remove("header__nav--active");
        burger.classList.remove("burger--active");
        document.body.classList.remove("scroll-lock");
      });
    });
    
     
}

