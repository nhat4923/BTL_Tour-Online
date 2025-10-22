var chedo = true;

function doichedo() {
  var body = document.body;
  var icon = document.getElementById("cheDoIcon");
  var introContent = document.querySelectorAll("p.intro-content");
  if (chedo) {
    body.style.backgroundColor = "black";
    body.style.color = "white";
    icon.innerHTML = "☀️";
    introContent.forEach((item) => (item.style.color = "#fff"));
    chedo = false;
  } else {
    body.style.backgroundColor = "white";
    body.style.color = "black";
    icon.innerHTML = "🌙";
    introContent.forEach((item) => (item.style.color = "#555"));
    chedo = true;
  }
}
