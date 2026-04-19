<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/img/neonquests_logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/style-questions.css">
    <title>Algo 2</title>

</head>

<body>
    <?php require "views/templates/top-bar.html" ?>

    <div class="quiz-wrapper">
        <div class="quiz-container">
            <p class="question">Que signifie la "portée des variables" et quelle est la différence entre une variable locale et globale ?</p>
            <form action="/index.php?action=check-answer&theme=4&question=2" method="post">
                <div class="options">
                    <label><input type="radio" name="answer" value="ans1">La portée est la zone de visibilité. Une locale n'est visible que dans sa fonction, une globale est visible dans tout le programme.</input></label>
                    <label><input type="radio" name="answer" value="ans2">La portée est la taille mémoire d'une variable. Une locale est petite, une globale est grande.</input></label>
                    <label><input type="radio" name="answer" value="ans3">La portée est la durée de vie. Une locale s'efface après 10 lignes, une globale reste toujours.</input></label>
                    <label><input type="radio" name="answer" value="ans4">La portée est le type de données. Une locale est un texte, une globale est un nombre.</input></label>
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