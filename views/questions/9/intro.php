<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/assets/img/neonquests_logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/style-questions.css">
    <title>Intro SQL</title>
</head>

<body>
    <?php require "views/templates/top-bar.html" ?>

    <div class="card-container">
        <div class="card">
            <h1>SQL (Bases de données)</h1>
            <p class="history">Par <strong>Chamberlin & Boyce</strong>. Pour ranger des milliers d'infos.</p>
            <div class="content">
                <h3>Les Points Clés :</h3>
                <ul>
                    <li><strong>La Table :</strong> Imagine un tableau Excel géant avec des colonnes et des lignes.</li>
                    <li><strong>SELECT :</strong> C'est le mot magique pour dire "Je veux voir cette info".</li>
                    <li><strong>FROM :</strong> C'est pour dire "Cherche dans ce tableau-là".</li>
                </ul>
                <h3>Piste pour l'élève :</h3>
                <p>Le SQL, c'est comme parler anglais à un classeur : "SELECT nom FROM eleves". Très simple !</p>
            </div>
            <div class="center-btn">
                <a href="/question/9/1"><button class="submit">Aller au quiz</button></a>
            </div>
        </div>
    </div>

    <?php require "views/templates/footer.html" ?>
</body>

</html>