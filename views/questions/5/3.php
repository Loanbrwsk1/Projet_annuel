<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/img/neonquests_logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/style-questions.css">
    <title>Reseau 3</title>
</head>

<body>
    <?php require "views/templates/top-bar.html" ?>

    <div class="quiz-wrapper">
        <div class="quiz-container">
            <p class="question">Complète les trous de cette requête utilisée pour configurer un SSH, représentés par des "<strong>[...]</strong>" : <br>
            <pre>
username admin password 12345<br>
hostname reims<br>
ip <strong>[...]</strong> esgi.fr<br>
crypto key generate <strong>[...]</strong><br>
line <strong>[...]</strong> 0 4<br>
transport input ssh<br>
transport output ssh<br>
login local
                </pre>
            </p>
            <form action="/index.php?action=check-answer&theme=5&question=3" method="post">
                <div class="options">
                    <label><input type="radio" name="answer" value="ans1">domain-name ; vty ; rsa</label>
                    <label><input type="radio" name="answer" value="ans2">domain name ; vty ; rsa</label>
                    <label><input type="radio" name="answer" value="ans3">domain-name ; rsa ; vty</label>
                    <label><input type="radio" name="answer" value="ans4">name domaine ; rsa ; vty</label>
                    <button type="submit" class="submit">Envoyer</button>
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