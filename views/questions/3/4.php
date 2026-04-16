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
    <?php require "views/templates/top-bar.html" ?>

    <div class="quiz-wrapper">
        <div class="quiz-container">
            <div class="step active" id="step-4">
                <p class="question">4. Déclarez un 'double' et l'afficher</p>
                <form action="http://projet.local/index.php?action=check-answer&theme=3&question=4" method="post">
                    <div class="input-zone vba-style">
                        <pre>
int main() {
    <input type="text" name="answer" required style="width: 70px;"> pi = 3.14;
    printf("Valeur : %<input type="text" name="answer2" required style="width: 40px;">\n", pi)<input type="text" name="answer3" required style="width: 30px;">
    return 0;
}</pre>
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