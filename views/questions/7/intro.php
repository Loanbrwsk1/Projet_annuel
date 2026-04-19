<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/assets/img/neonquests_logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/style-questions.css">
    <title>Intro Linux</title>
</head>

<body>
    <?php require "views/templates/top-bar.html" ?>

    <div class="card-container">
        <div class="card">
            <h1>Linux & Terminal</h1>
            <p class="history">Créé par <strong>Linus Torvalds</strong>. C'est l'OS sans la souris.</p>
            <div class="content">
                <h3>Les Points Clés :</h3>
                <ul>
                    <li><strong>Le Terminal :</strong> On tape des ordres au lieu de cliquer sur des icônes.</li>
                    <li><strong>cd :</strong> C'est la commande pour "entrer" dans un dossier.</li>
                    <li><strong>ls :</strong> C'est la commande pour "regarder" ce qu'il y a dans le dossier.</li>
                </ul>
                <h3>Piste pour l'élève :</h3>
                <p>Ne panique pas devant l'écran noir. Tape `help` ou cherche sur Google, Linux est fait pour être exploré.</p>
            </div>
            <div class="center-btn">
                <a href="/question/7/1"><button class="submit">Aller au quiz</button></a>
            </div>
        </div>
    </div>

    <?php require "views/templates/footer.html" ?>
</body>

</html>