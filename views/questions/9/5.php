<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/img/neonquests_logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/style-questions.css">
    <title>SQL 5</title>
</head>

<body>
    <?php require "views/templates/top-bar.html" ?>

    <div class="quiz-wrapper">
        <div class="quiz-container">
            <div class="step active">
                <p class="question">5. On veut les produits dont le prix est > à la moyenne. Complète la fonction :</p>
                <form action="http://projet.local/index.php?action=check-answer&theme=9&question=5" method="post">
                    <div class="input-zone vba-style">
                        <pre>
SELECT nom FROM Produits 
WHERE prix > (<input type="text" name="answer"" style="width: 70px;" placeholder="..."> <input type="text" name="answer2" style="width: 60px;" placeholder="...">(prix) 
FROM Produits)<input type="text" name="answer3" style="width: 30px;" placeholder="...">
        </pre>
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