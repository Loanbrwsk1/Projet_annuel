<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/img/neonquests_logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/style-questions.css">
    <title>Linux 1</title>
</head>

<body>
    <?php require "views/top-bar.html" ?>

    <div class="quiz-wrapper">
        <div class="quiz-container">
            <div class="step active" id="step-1">
                <p class="question">Quel est le résultat de la commande ls -al ?</p>
                <div class="options">
                    <button class="choice" data-correct="true" onclick="checkAnswer(this, 1)">Afficher tous les fichiers
                        y compris cachés de façon détaillée</button>
                    <button class="choice" onclick="checkAnswer(this, 1)">Affiche uniquement les fichiers cachés du
                        répertoire</button>
                    <button class="choice" onclick="checkAnswer(this, 1)">Supprime tous les fichiers du répertoire
                        courant</button>
                    <button class="choice" onclick="checkAnswer(this, 1)">Liste les fichiers par ordre alphabétique
                        inversé</button>
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