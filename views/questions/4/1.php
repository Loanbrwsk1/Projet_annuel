<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/img/neonquests_logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/style-questions.css">
    <title>Algo 1</title>

</head>

<body>
    <?php require "views/templates/top-bar.html" ?>

    <div class="quiz-wrapper">
        <div class="quiz-container">
            <div class="step active">
                <p class="question">Quelle est la différence majeure entre une variable et une constante ?</p>
                <form action="http://projet.local/index.php?action=check-answer&theme=4&question=1" method="post">
                    <div class="options">
                        <label><input type="radio" name="answer" value="ans1">Une variable prend moins de place en mémoire qu'une constante.</input></label>
                        <label><input type="radio" name="answer" value="ans2">Une constante peut être modifiée par l'utilisateur, mais pas une variable.</input></label>
                        <label><input type="radio" name="answer" value="ans3">Les variables sont utilisées uniquement en VBA et les constantes uniquement en C.</input></label>
                        <label><input type="radio" name="answer" value="ans4">Une variable peut voir sa valeur modifiée, alors qu'une constante garde la même valeur tout au long du programme.</input></label>
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