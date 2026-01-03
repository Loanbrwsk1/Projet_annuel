<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/neonquests_logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style-accueil.css">
    <title>NeonQuests</title>
</head>

<body>
    
    <div class="top-bar">
        <div>
            <a href="index.php">
                <img src="assets/images/neonquests_full_logo.svg" alt="neonquests-logo" class="logo">
            </a>
        </div>
        <div class="progress-bar">
            <progress value="25" max="100"></progress>
        </div>
        <div class="account-logo-container">
            <?= $_SESSION['pseudo'];?>
            <a href="account.php">
                <img src="assets/images/neonquests_account_icon.png" alt="neonquests-account-icon" class="account">
            </a>
        </div>
    </div>

    <!-- From Uiverse.io by InfinityLoopGames -->
    <form class="container" action="change-pwd.php" method="post">
        <div class="input-container">
            <div class="input-content">
                <div class="input-dist">
                    <div class="input-type">
                        <input class="input-is" type="password" required="" placeholder="Mot de passe actuel" name="actual-pwd" />
                        <input class="input-is" type="password" required="" placeholder="Nouveau mot de passe" name="password"/>
                        <input class="input-is" type="password" required="" placeholder="Confirmation mot de passe" name="confirm-password"/>
                        <a href="accueil.php">
                            <button class="submit">Changer le mot de passe</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="sup-button">
        <a href="delete.php">
            <button class="create-account-button"><span>Supprimer mon compte</span></button>
        </a>
    </div>

    <footer>
        <p>NeonQuests</p>
        <p>Projet Annuel ESGI 2025/2026</p>
        <p>Loan Borowski & Matthias Bourdon & Noa Rousseau</p>
    </footer>
<?php
if(!empty($_SESSION['error'])){
    echo "<script>
        window.onload = function() {
            alert('".$_SESSION['error']."');
        } </script>";
    unset($_SESSION['error']);
}
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>