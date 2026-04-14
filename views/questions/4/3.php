<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/img/neonquests_logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/style-questions.css">
    <title>Algo 3</title>

</head>

<body>
    <?php require "views/top-bar.html" ?>

    <div class="quiz-wrapper">
        <div class="quiz-container">
            <div class="step active" id="step-3">
                <p class="question">3. Variable vs Constante</p>
                <div class="scenario-box">
                    <strong>Erreur :</strong> Dans l'algorithme "CalculCercle", une ligne tente de modifier
                    <strong>PI</strong>. Pourquoi est-ce impossible ?
                </div>
                <div class="options">
                    <button class="choice" onclick="checkAnswer(this, 3)">Parce que PI est un ENTIER</button>
                    <button class="choice" data-correct="true" onclick="checkAnswer(this, 3)">Parce qu'on ne peut pas
                        modifier une CONSTANTE</button>
                    <button class="choice" onclick="checkAnswer(this, 3)">Parce que le rayon est déjà défini</button>
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