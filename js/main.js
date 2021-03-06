// Script for active navigation
const moveMenuNav = (event) => {
  const getId = event.id;
  const links = document.querySelectorAll(".navbar .nav-link");
  for (i = 0; i < links.length; i++) {
    if (links[i].hasAttribute("class")) {
      links[i].classList.remove("active");
    }
  }

  event.classList.add("active");
};
// End of Script for active navigation

function topNavBar() {
  window.onscroll = function () {
    myFunction();
  };

  // Get the navbar
  var navbar = document.getElementById("navbar");
  const mt = document.querySelector("#mt");
  const toggleTop = document.querySelector("#toggleTop");

  // Get the offset position of the navbar
  var sticky = navbar.offsetTop;

  // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
  function myFunction() {
    if (window.pageYOffset >= sticky) {
      navbar.classList.add("sticky");
      mt.classList.add("margin-top");
      toggleTop.classList.remove("toggle-top");
    } else {
      navbar.classList.remove("sticky");
      mt.classList.remove("margin-top");
      toggleTop.classList.add("toggle-top");
    }
  }
}

function closeNav() {
  $(".navbar-collapse").collapse("hide");
}

$(document).ready(
  $(function () {
    var navbtn = $(".navbar-toggler");

    $(navbtn).click(function () {
      $(navbtn).toggleClass("active");
    });
  })
);
