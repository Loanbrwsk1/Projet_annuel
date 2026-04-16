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
    <?php require "views/templates/top-bar.html" ?>

    <div class="quiz-wrapper">
        <div class="quiz-container">
            <div class="step active">
                <p class="question">Dans l'onglet CLI de Packet Tracer, quelle commande permet de passer du mode
                    "Utilisateur" (>) au mode "Privilégié" (#) ?</p>
                <form action="http://projet.local/index.php?action=check-answer&theme=5&question=2" method="post">
                    <div class="options">
                        <label><input type="radio" name="answer" value="ans1">enable</label>
                        <label><input type="radio" name="answer" value="ans2">system-view</label>
                        <label><input type="radio" name="answer" value="ans3">configure terminal</label>
                        <label><input type="radio" name="answer" value="ans4">login privileged</label>
                        <button type="submit" class="submit">Envoyer</button>
                    </div>
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