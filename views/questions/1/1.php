<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/img/neonquests_logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/style-questions.css">
    <title>Web 1</title>
</head>

<body>

    <?php require "views/top-bar.html" ?>

    <div class="quiz-wrapper">
        <div class="quiz-container">
            <div class="step active">
                <p class="question">En HTML, quelle est la particularité d'une balise comme &lt;br&gt; ou &lt;img&gt; ?</p>
                <form action="http://projet.local/index.php?action=check-answer&theme=1&question=1" method="post">
                    <div class="options">
                        <label><input type="radio" name="answer" value="ans1" id="1">Elles doivent obligatoirement être écrites en majuscules.</input></label>
                        <label><input type="radio" name="answer" value="ans2" id="2">Ce sont des balises dites "solitaires" : elles n'ont pas de balise fermante</input></label>
                        <label><input type="radio" name="answer" value="ans3" id="3">Elles ne peuvent être utilisées que dans la partie</input></label>
                        <label><input type="radio" name="answer" value="ans4" id="4">Elles servent uniquement à changer la couleur du texte</input></label>
                        <button type="submit" class="submit">Envoyer</button>
                    </div>
                </form>
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