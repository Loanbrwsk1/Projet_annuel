<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/img/neonquests_logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/style-questions.css">
    <title>Linux 3</title>
</head>

<body>
    <?php require "views/top-bar.html" ?>

    <div class="quiz-wrapper">
        <div class="quiz-container">
            <div class="step active" id="step-3">
                <p class="question">Quel est le résultat de la commande echo coucou > /tmp/coucou.txt</p>
                <div class="options">
                    <button class="choice" onclick="checkAnswer(this, 3)">Ajoute le mot "coucou" à la fin du fichier
                        sans rien supprimer</button>
                    <button class="choice" onclick="checkAnswer(this, 3)">Affiche le contenu du fichier /tmp/coucou.txt
                        dans le terminal</button>
                    <button class="choice" data-correct="true" onclick="checkAnswer(this, 3)">Écrase le contenu du
                        fichier /tmp/coucou.txt et y écrit "coucou"</button>
                    <button class="choice" onclick="checkAnswer(this, 3)">Créé un dossier nommé "coucou" dans le
                        répertoire /tmp</button>
                </div>
            </div>
        </div>
    </div>

    <?php
    require "views/footer.html";

    if (!empty($_SESSION['error'])) {
        echo "<script>
        window.onload = function() {
            alert('" . $_SESSION['error'] . "');
        } </script>";
        unset($_SESSION['error']);
    }
    ?>
</body>

</html>