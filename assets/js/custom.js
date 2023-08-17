// Show/hide navbar when toggler button is clicked
function toggleNavbar() {
  const navbarLinks = document.getElementById("navbar-links");
  const navbarcloseLinks = document.querySelector(".closebtn");

  const overlay = document.querySelector(".overlay");

  navbarLinks.classList.toggle("navbar-hide");
  navbarLinks.classList.toggle("navbar-show");

  overlay.classList.toggle("show-overlay");
  navbarcloseLinks.classList.toggle("show-overlay");
}

const overlay = document.querySelector(".overlay");
overlay.addEventListener("click", toggleNavbar);

// Wait for the page to load
window.addEventListener("load", function () {
  // Find the preloader element
  const preloader = document.querySelector(".preloader");
  if (preloader) {
    // Add a class to hide the preloader
    preloader.classList.add("preloader-deactivate");
  }
});

const currentUrl = window.location.href;

// Check if the current URL matches any of the menu links
if (currentUrl.includes("/")) {
  document.getElementById("home-link").classList.add("active");
} else if (currentUrl.includes("/about")) {
  document.getElementById("about-link").classList.add("active");
} else if (currentUrl.includes("/services")) {
  document.getElementById("services-link").classList.add("active");
} else if (currentUrl.includes("/testimonial")) {
  document.getElementById("testimonial-link").classList.add("active");
} else if (currentUrl.includes("/contact")) {
  document.getElementById("contact-link").classList.add("active");
}

const navbar = document.querySelector(".navbar");

const navbarOffset = navbar.offsetTop;

window.addEventListener("scroll", function () {
  if (window.pageYOffset >= navbarOffset) {
    navbar.classList.add("sticky");
  } else {
    navbar.classList.remove("sticky");
  }
});
