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
                    <label><input type="radio" name="answer" value="ans1">Afficher tous les fichiers y compris cachés de façon détaillée</label>
                    <label><input type="radio" name="answer" value="ans2">Affiche uniquement les fichiers cachés du répertoire</label>
                    <label><input type="radio" name="answer" value="ans3">Supprime tous les fichiers du répertoire courant</label>
                    <label><input type="radio" name="answer" value="ans4">Liste les fichiers par ordre alphabétique inversé</label>
                    <button type="submit" class="submit">Envoyer</button>
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