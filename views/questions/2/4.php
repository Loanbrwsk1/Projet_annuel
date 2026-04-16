<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/img/neonquests_logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/style-questions.css">
    <title>VBA 4</title>

</head>

<body>
    <?php require "views/templates/top-bar.html" ?>

    <div class="quiz-wrapper">
        <div class="quiz-container">
            <div class="step active">
                <p class="question">4. Utiliser la fonction RECHERCHEV</p>
                <div class="scenario-box">
                    <strong>Scénario :</strong> Trouve le prix de l'article <strong>D2</strong> dans le tableau
                    <strong>A2:B10</strong>.
                </div>
                <form action="http://projet.local/index.php?action=check-answer&theme=2&question=4" method="post">
                    <div class="input-zone vba-style">
                        <pre>=RECHERCHEV(D2; A2:B10; <input type="text" name="answer" placeholder="..." style="width: 40px;"> ; FAUX)</pre>
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
            alert('" . $_SESSION['error'] . "');
        } </script>";
        unset($_SESSION['error']);
    }
    ?>
</body>

</html>