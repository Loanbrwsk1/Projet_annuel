<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/img/neonquests_logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/style-questions.css">
    <title>Linux 4</title>
</head>

<body>
    <?php require "views/templates/top-bar.html" ?>

    <div class="quiz-wrapper">
        <div class="quiz-container">
            <p class="question">À quoi sert la commande sudo ?</p>
            <form action="/index.php?action=check-answer&theme=7&question=4" method="post">
                <div class="options">
                    <button type="submit" name="answer" value="ans1" class="choice">À redémarrer le système immédiatement.</button>
                    <button type="submit" name="answer" value="ans2" class="choice">À exécuter une commande en tant que root</button>
                    <button type="submit" name="answer" value="ans3" class="choice">À sécuriser la connexion réseau entre deux serveurs</button>
                    <button type="submit" name="answer" value="ans4" class="choice">À exécuter une commande en tant qu'un autre utilisateur</button>
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