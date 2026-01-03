<?php
session_start();
$_SESSION['pseudo'] = "Invite";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/images/neonquests_logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>NeonQuests</title>
</head>

<body>

    <div class="image-container">
        <img src="assets/images/neonquests_full_logo.svg" alt="neonquests-logo">
    </div>
    <!-- From Uiverse.io by InfinityLoopGames -->
    <form class="container" action="create.php" method="post">
        <div class="input-container">
            <div class="input-content">
                <div class="input-dist">
                    <div class="input-type">
                        <input class="input-is" type="text" required="" placeholder="Pseudo" name="pseudo" />
                        <input class="input-is" type="password" required="" placeholder="Mot de passe" name="password"/>
                        <input class="input-is" type="password" required="" placeholder="Confirmation mot de passe" name="confirm-password"/>
                        <a href="accueil.php">
                            <button class="submit">Créer un compte</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="sup-button">
        <a href="index.php">
            <button class="create-account-button">Se connecter</button>
        </a>
        <a href="accueil.php">
            Jouer sans se connecter
        </a>
    </div>
<?php
if(!empty($_SESSION['error'])){
    echo "<script>
        window.onload = function() {
            alert('".$_SESSION['error']."');
        } </script>";
    unset($_SESSION['error']);
}
?>
</body>

</html>