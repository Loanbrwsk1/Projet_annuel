<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/img/neonquests_logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/style-questions.css">
    <title>C 5</title>
</head>

<body>
    <?php require "views/top-bar.html" ?>

    <div class="quiz-wrapper">
        <div class="quiz-container">
            <div class="step active" id="step-5">
                <p class="question">5. Le reste de la division de 17 par 5 (3 erreurs)</p>
                <div class="input-zone vba-style">
                    <pre>
int reste;
reste = 17 <input type="text" id="answer-input-5-1" style="width: 30px;"> 5; 
printf(%<input type="text" id="answer-input-5-2" style="width: 80px;">, <input type="text" id="answer-input-5-3" style="width: 60px;">);</pre>
                </div>
                <button class="choice" onclick="checkMultipleAnswer(5, ['%', 'd', 'reste'])">Vérifier</button>
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