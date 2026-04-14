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
            <div class="step active" id="step-5">
                <p class="question">5. Échange de valeurs (Permutation)</p>
                <div class="scenario-box">
                    Complétez les étapes pour échanger <strong>A</strong> et <strong>B</strong> en utilisant la variable
                    <strong>Temp</strong>.
                </div>
                <div class="input-zone vba-style">
                    <pre>
A <- 10
B <- 20
Temp <- <input type="text" id="answer-input-5-1" style="width: 30px;" placeholder="?">
A <- <input type="text" id="answer-input-5-2" style="width: 30px;" placeholder="?">
B <- <input type="text" id="answer-input-5-3" style="width: 30px;" placeholder="?"></pre>
                </div>
                <button class="choice" onclick="checkMultipleAnswer(5, ['A', 'B', 'Temp'])">Valider l'échange</button>
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