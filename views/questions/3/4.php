<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/img/neonquests_logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/style-questions.css">
    <title>C 4</title>
</head>

<body>
    <?php require "views/top-bar.html" ?>

    <div class="quiz-wrapper">
        <div class="quiz-container">
            <div class="step active" id="step-4">
                <p class="question">4. Déclarez un 'double' et l'affichage (3 erreurs)</p>
                <div class="input-zone vba-style">
                    <pre>
int main() {
    <input type="text" id="answer-input-4-1" style="width: 70px;"> pi = 3.14;
    printf("Valeur : %<input type="text" id="answer-input-4-2" style="width: 40px;">\n", pi)<input type="text" id="answer-input-4-3" style="width: 30px;">
    return 0;
}</pre>
                </div>
                <button class="choice" onclick="checkMultipleAnswer(4, ['double', 'lf', ';'])">Valider le code</button>
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