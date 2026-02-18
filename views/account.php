<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/neonquests_logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style-account.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>NeonQuests</title>
</head>

<body>

    <div class="top-bar">
        <div>
            <a href="index.php?page=home">
                <img src="assets/img/neonquests_full_logo.svg" alt="neonquests-logo" class="logo">
            </a>
        </div>
        <div class="progress-bar">
            <progress value=<?= $_SESSION['progress'] ?> max="100"></progress>
        </div>
        <div class="account-logo-container">
            <span class="pseudo"><?= $_SESSION['pseudo'] ?></span>
            <a href="account.php">
                <img src="assets/img/neonquests_account_icon.png" alt="neonquests-account-icon" class="account">
            </a>
        </div>
    </div>

    <div class="logo-account-wrapper">
        <img src="assets/img/neonquests_account_icon.png" alt="nonquests-account-icon" class="logo-account">
        <?= $_SESSION['pseudo'] ?>
    </div>

    <div class="wrapper-confirm-delete" id="confirm-delete">
        <div class="confirm-delete">
            <h2>Voulez-vous vraiment supprimer votre compte ?</h2>
            <p class="delete-info">Cette action est irréversible</p>
            <br>
            <div class="wrapper-button-delete">
                <button onclick="displayConfirm()" class="non-button button-delete">Non</button>
                <a href="index.php?action=delete">
                    <button class="oui-button button-delete">Oui</button>
                </a>
            </div>
        </div>
    </div>

    <!-- From Uiverse.io by InfinityLoopGames -->
    <form class="container" action="index.php?action=change-pwd" method="post">
        <div class="input-container">
            <div class="input-content">
                <div class="input-dist">
                    <div class="input-type">
                        <div class="password-container">
                            <input class="input-is" type="password" required="" placeholder="Mot de passe actuel" name="actual-pwd" id="actual-pwd" />
                            <button type="button" class="toggle-password" onclick="togglePwd('actual-pwd')">
                                <i class="fa-solid fa-eye" id="icon-actual"></i>
                            </button>
                        </div>
                        <div class="password-container">
                            <input class="input-is" type="password" required="" placeholder="Nouveau mot de passe" name="password" id="password" />
                            <button type="button" class="toggle-password" onclick="togglePwd('password')">
                                <i class="fa-solid fa-eye" id="icon-password"></i>
                            </button>
                        </div>
                        <div class="password-container">
                            <input class="input-is" type="password" required="" placeholder="Confirmation mot de passe" name="confirm-password" id="confirm-password" />
                            <button type="button" class="toggle-password" onclick="togglePwd('confirm-password')">
                                <i class="fa-solid fa-eye" id="icon-confirm"></i>
                            </button>
                        </div>
                        <button class="submit">Changer le mot de passe</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="sup-button">
        <a href="index.php?action=logout">
            <button class="create-account-button"><span class="log-out">Se déconnecter</span></button>
        </a>
        <!--  <a href="delete.php" </a> -->
        <button onclick="displayConfirm()" class="create-account-button"><span class="delete-account">Supprimer mon compte</span></button>
        
    </div>

    <footer>
        <p>NeonQuests</p>
        <p>Projet Annuel ESGI 2025/2026</p>
        <p>Loan Borowski & Matthias Bourdon & Noa Rousseau</p>
    </footer>
    <?php
    if (!empty($_SESSION['error'])) {
        echo "<script>
        window.onload = function() {
            alert('" . $_SESSION['error'] . "');
        } </script>";
        unset($_SESSION['error']);
    }
    ?>
    <script src="assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <script defer src="assets/js/script-account.js"></script>
</body>
</html> 