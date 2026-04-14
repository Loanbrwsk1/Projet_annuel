<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/img/neonquests_logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/style-questions.css">
    <title>Algo 1</title>

</head>

<body>
    <?php require "views/top-bar.html" ?>

    <div class="quiz-wrapper">
        <div class="quiz-container">
            <div class="step active" id="step-1">
                <p class="question">Quelle est la différence majeure entre une variable et une constante ?</p>
                <div class="options">
                    <button class="choice" onclick="checkAnswer(this, 1)">Une variable prend moins de place en mémoire
                        qu'une constante.</button>
                    <button class="choice" onclick="checkAnswer(this, 1)">Une constante peut être modifiée par
                        l'utilisateur, mais pas une variable.</button>
                    <button class="choice" onclick="checkAnswer(this, 1)">Les variables sont utilisées uniquement en VBA
                        et
                        les constantes uniquement en C.</button>
                    <button class="choice" data-correct="true" onclick="checkAnswer(this, 1)">Une variable peut voir sa
                        valeur modifiée, alors qu'une constante garde la même valeur tout au long du programme.</button>
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