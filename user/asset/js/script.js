window.addEventListener("scroll", function () {
  const navbar = document.getElementById("nav");
  if (window.scrollY > window.innerHeight) {
    navbar.classList.add("bg-nav-scrolled");
  } else {
    navbar.classList.remove("bg-nav-scrolled");
  }
});
