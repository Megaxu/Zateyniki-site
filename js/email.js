var modal = document.getElementById("my_modal");
var btn = document.getElementById("btn_modal_window");
var span = document.getElementsByClassName("close_modal_window")[0];
var form = document.getElementById("link-form");
var btn_send = document.getElementById("send-form");

btn.onclick = function () {
    modal.style.display = "block";
}

span.onclick = function () {
    modal.style.display = "none";
    form.reset();
}

window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
        form.reset();
    }
}