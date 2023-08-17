var script = document.createElement("script");
script.async = true;
script.src = "https://www.googletagmanager.com/gtag/js?id=G-6H3FPE5JJG";
document.head.appendChild(script);

window.dataLayer = window.dataLayer || [];
function gtag() {
  dataLayer.push(arguments);
}
gtag("js", new Date());
gtag("config", "G-6H3FPE5JJG");

// Google claarity
(function (c, l, a, r, i, t, y) {
  c[a] =
    c[a] ||
    function () {
      (c[a].q = c[a].q || []).push(arguments);
    };
  t = l.createElement(r);
  t.async = 1;
  t.src = "https://www.clarity.ms/tag/" + i;
  y = l.getElementsByTagName(r)[0];
  y.parentNode.insertBefore(t, y);
})(window, document, "clarity", "script", "h3ui84blyi");

(function (w, d) {
  w.CollectId = "6460e2081b0491e28f6198a0";
  var h = d.head || d.getElementsByTagName("head")[0];
  var s = d.createElement("script");
  s.setAttribute("type", "text/javascript");
  s.async = true;
  s.setAttribute("src", "https://collectcdn.com/launcher.js");
  h.appendChild(s);
})(window, document);

// Google Tag Manager
(function (w, d, s, l, i) {
  w[l] = w[l] || [];
  w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
  var f = d.getElementsByTagName(s)[0],
    j = d.createElement(s),
    dl = l != "dataLayer" ? "&l=" + l : "";
  j.async = true;
  j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
  f.parentNode.insertBefore(j, f);
})(window, document, "script", "dataLayer", "GTM-WWNHXHN");
// End Google Tag Manager

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
