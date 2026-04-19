<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/img/neonquests_logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/style-questions.css">
    <title>SQL 4</title>
</head>

<body>
    <?php require "views/templates/top-bar.html" ?>

    <div class="quiz-wrapper">
        <div class="quiz-container">
            <p class="question">4. Complète la jointure pour lier 'Etudiants' et 'Notes' via 'id_etu' :</p>
            <form action="/index.php?action=check-answer&theme=9&question=4" method="post">
                <div class="input-zone vba-style">
                    <pre>
SELECT Etudiants.nom, Notes.valeur 
FROM Etudiants 
<input type="text" name="answer" style="width: 60px;" placeholder="..."> Notes 
<input type="text" name="answer2" style="width: 40px;" placeholder="..."> Etudiants.id_etu = Notes.id_etu<input type="text" name="answer3" style="width: 30px;" placeholder="...">
        </pre>
                </div>
                <button type="submit" class="choice">Envoyer</button>
            </form>
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