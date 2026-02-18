let confirm_delete = document.getElementById("confirm-delete");
confirm_delete.style.display = "none"

function displayConfirm()
{
    console.log(confirm_delete.style.display);
    confirm_delete.style.display == "none" ? confirm_delete.style.display = "flex" : confirm_delete.style.display = "none";
}

function displayConfirmTwo()
{
    const div = document.createElement("div");
    div.innerHTML = `
    <div class="wrapper-confirm-delete" id="confirm-delete">
        <div class="confirm-delete">
            <h2>Voulez-vous vraiment supprimer votre compte ?</h2>
            <p class="delete-info">Cette action est irréversible</p>
            <br>
            <div class="wrapper-button-delete">
                <button onclick="displayConfirm()" class="non-button button-delete">Non</button>
                <a href="delete.php">
                    <button class="oui-button button-delete">Oui</button>
                </a>
            </div>
        </div>
    </div>
    `;
    document.body.appendChild(div);
}