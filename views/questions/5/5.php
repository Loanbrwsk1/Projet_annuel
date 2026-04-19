<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/img/neonquests_logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/style-questions.css">
    <title>Reseau 5</title>
</head>

<body>
    <?php require "views/templates/top-bar.html" ?>

    <div class="quiz-wrapper">
        <div class="quiz-container">
            <p class="question">Sur un routeur Cisco, quelle commande permet d'ajouter une "Route par défaut" pour envoyer tout le trafic inconnu vers l'adresse 192.168.1.254 ?</p>
            <form action="/index.php?action=check-answer&theme=5&question=5" method="post">
                <div class="options">
                    <label><input type="radio" name="answer" value="ans1">ip route 255.255.255.255 255.255.255.255 192.168.1.254</label>
                    <label><input type="radio" name="answer" value="ans2">router default-gateway 192.168.1.254</label>
                    <label><input type="radio" name="answer" value="ans3">ip route 192.168.1.254 255.255.255.0</label>
                    <label><input type="radio" name="answer" value="ans4">ip route 0.0.0.0 0.0.0.0 192.168.1.254</label>
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