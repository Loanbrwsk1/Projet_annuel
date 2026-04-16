<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/img/neonquests_logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/style-questions.css">
    <title>Web 3</title>
</head>

<body>
    <?php require "views/templates/top-bar.html" ?>

    <div class="quiz-wrapper">
        <div class="quiz-container">
            <div class="step active" id="step-3">
                <p class="question">Créez un lien "Contact" vers la page "contact.html":</p>
                <div class="input-zone">
                    <p class="code-line">&lt;p&gt;Accueil&lt;/p&gt;</p>
                    <form action="http://projet.local/index.php?action=check-answer&theme=1&question=3" method="post">
                        <input type="text" name="answer" id="answer-input" placeholder="Tapez votre code ici..." autocomplete="off">
                        <button type="submit" class="choice">Envoyer</button>
                    </form>
                </div>
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