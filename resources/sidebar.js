document.querySelector(".openbtn").addEventListener("click", toggleNav);
  document.querySelector("#flat-body").addEventListener("click", close);

function toggleNav() {
    if (document.getElementById("left-sidebar").style.width == "250px") {
      return close();
    }
    return open();
}
// Set the width of the sidebar to 250px and draw border
function open() {
  document.getElementById("left-sidebar").style.width = "250px";
  document.getElementById("left-sidebar").style.opacity = "1";
  document.getElementById("left-sidebar").style.borderColor = "#c4c4c4";
}
// Set the width of the sidebar to 250px and unset border
function close() {
  document.getElementById("left-sidebar").style.width = "0px";
  document.getElementById("left-sidebar").style.opacity = "0";
  document.getElementById("left-sidebar").style.borderColor = "transparent";
}