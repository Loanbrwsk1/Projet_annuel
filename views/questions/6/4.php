<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/img/neonquests_logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/style-questions.css">
    <title>CLAO 4</title>
</head>

<body>
    <?php require "views/templates/top-bar.html" ?>

    <div class="quiz-wrapper">
        <div class="quiz-container">
            <p class="question">4. Quelle est la règle de sortie d'une porte logique XNOR ?</p>
            <form action="/index.php?action=check-answer&theme=6&question=4" method="post">
                <div class="options">
                    <label><input type="radio" name="answer" value="ans1">Sortie à 1 si au moins une entrée est à 1</label>
                    <label><input type="radio" name="answer" value="ans2">Sortie à 1 si les entrées sont différentes</label>
                    <label><input type="radio" name="answer" value="ans3">Sortie à 1 si les entrées sont identiques (0-0 ou 1-1)</label>
                    <label><input type="radio" name="answer" value="ans4">Sortie toujours inverse de l'entrée A</label>
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