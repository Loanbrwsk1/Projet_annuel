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
    <?php require "views/templates/top-bar.html" ?>

    <div class="quiz-wrapper">
        <div class="quiz-container">
            <p class="question">Quel est le résultat de la commande ls -al ?</p>
            <form action="/index.php?action=check-answer&theme=7&question=1" method="post">
                <div class="options">
                    <button type="submit" name="answer" value="ans1" class="choice">Afficher tous les fichiers y compris cachés de façon détaillée</button>
                    <button type="submit" name="answer" value="ans2" class="choice">Affiche uniquement les fichiers cachés du répertoire</button>
                    <button type="submit" name="answer" value="ans3" class="choice">Supprime tous les fichiers du répertoire courant</button>
                    <button type="submit" name="answer" value="ans4" class="choice">Liste les fichiers par ordre alphabétique inversé</button>
                </div>
            </form>
        </div>
    </div>

    <?php
    require "views/templates/footer.html";

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