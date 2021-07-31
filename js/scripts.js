
var navLinks = document.getElementsByClassName("nav-link");

Array.from(navLinks).forEach(function(link) {
  link.addEventListener("click", function() {
    var loc = "?page=" + this.getAttribute('name');
    console.log("Location", loc);
    window.location.href = loc;
  });
});