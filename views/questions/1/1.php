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

    <?php require "views/templates/top-bar.html" ?>

    <div class="quiz-wrapper">
        <div class="quiz-container">
            <p class="question">En HTML, quelle est la particularité d'une balise comme &lt;br&gt; ou &lt;img&gt; ?</p>
            <form action="/index.php?action=check-answer&theme=1&question=1" method="post">
                <div class="options">
                    <button type="submit" value="ans1" name="answer" class="choice">Elles doivent obligatoirement être écrites en majuscules.</button>
                    <button type="submit" value="ans2" name="answer" class="choice">Ce sont des balises dites "solitaires" : elles n'ont pas de balise fermante</button>
                    <button type="submit" value="ans3" name="answer" class="choice">Elles ne peuvent être utilisées que dans la partie</button>
                    <button type="submit" value="ans4" name="answer" class="choice">Elles servent uniquement à changer la couleur du texte</button>
                </div>
            </form>
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