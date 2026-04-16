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
    <?php require "views/templates/top-bar.html" ?>

    <div class="quiz-wrapper">
        <div class="quiz-container">
            <div class="step active">
                <p class="question">5. Le reste de la division de 17 par 5</p>
                <form action="http://projet.local/index.php?action=check-answer&theme=3&question=5" method="post">
                    <div class="input-zone vba-style">
                        <pre>
int reste;
reste = 17 <input type="text" name="answer" required style="width: 20px;"> 5; 
printf(%<input type="text" name="answer2" required style="width: 20px;">, <input type="text" name="answer3" required style="width: 50px;">);</pre>
                    </div>
                    <button type="submit" class="submit">Envoyer</button>
                </form>
            </div>
        </div>
    </div>

    <?php
    require "views/templates/footer.html";

    if (!empty($_SESSION['error'])) {
        echo "<script>
        window.onload = function() {
            alert(" . json_encode($_SESSION['error']) . ");
        } </script>";
        unset($_SESSION['error']);
    }
    ?>
</body>

</html>