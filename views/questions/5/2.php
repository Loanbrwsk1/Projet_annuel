<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/img/neonquests_logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/style-questions.css">
    <title>Reseau 2</title>
</head>

<body>
    <?php require "views/top-bar.html" ?>

    <div class="quiz-wrapper">
        <div class="quiz-container">
            <div class="step active" id="step-2">
                <p class="question">Dans l'onglet CLI de Packet Tracer, quelle commande permet de passer du mode
                    "Utilisateur" (>) au mode "Privilégié" (#) ?</p>
                <div class="options">
                    <button class="choice" data-correct="true" onclick="checkAnswer(this, 2)">enable</button>
                    <button class="choice" onclick="checkAnswer(this, 2)">system-view</button>
                    <button class="choice" onclick="checkAnswer(this, 2)">configure terminal</button>
                    <button class="choice" onclick="checkAnswer(this, 2)">login privileged</button>
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