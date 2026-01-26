let confirm_delete = document.getElementById("confirm-delete");
confirm_delete.style.display = "none"

function displayConfirm()
{
    console.log(confirm_delete.style.display);
    confirm_delete.style.display == "none" ? confirm_delete.style.display = "flex" : confirm_delete.style.display = "none";
}