document.addEventListener("DOMContentLoaded", function() {
  var exportsDropdown = document.getElementById("exportsDropdown");
  var exportsMenu = document.getElementById("exportsMenu");

  exportsDropdown.addEventListener("click", function() {
      if (exportsMenu.style.display === "block") {
          exportsMenu.style.display = "none";
      } else {
          exportsMenu.style.display = "block";
      }
  });
});
document.addEventListener("DOMContentLoaded", function() {
  var exportsDropdown = document.getElementById("serviceDropdown");
  var exportsMenu = document.getElementById("serviceMenu");

  exportsDropdown.addEventListener("click", function() {
      if (exportsMenu.style.display === "block") {
          exportsMenu.style.display = "none";
      } else {
          exportsMenu.style.display = "block";
      }
  });
});