var chedo = true;

function doichedo() {
    var body = document.body;
    var icon = document.getElementById("cheDoIcon");

    if (chedo) {
        body.style.backgroundColor = "black";
        body.style.color = "white";
        icon.innerHTML = "☀️";
        chedo = false;
    } else {
        body.style.backgroundColor = "white";
        body.style.color = "black";
        icon.innerHTML = "🌙";
        chedo = true;
    }
}
