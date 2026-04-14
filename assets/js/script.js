//? Login
function togglePwd(id) {
    var x = document.getElementById(id);
    x.type = (x.type === "password") ? "text" : "password";
}

//? Account
let confirm_delete = document.getElementById("confirm-delete");
confirm_delete.style.display = "none";

function displayConfirm()
{
    console.log(confirm_delete.style.display);
    confirm_delete.style.display == "none" ? confirm_delete.style.display = "flex" : confirm_delete.style.display = "none";
}

//? Home
const disabled_button = document.querySelectorAll(".disabled");

disabled_button.forEach(element => {
    element.disabled = true;
});