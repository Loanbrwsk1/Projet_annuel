<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/assets/img/neonquests_logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/style-questions.css">
    <title>Intro</title>
</head>

<body>
    <?php require "views/templates/top-bar.html" ?>

    <div class="card-container">
        <div class="card">
            <h1>Introduction</h1>
            <div class="content">
                <p>Bienvenue sur NeonQuests !</p>
                <p>Ici, vous trouverez des quizs divisés en 9 thèmes :</p>
                <ul>
                    <li>HTML - CSS - PHP</li>
                    <li>VBA/Excel</li>
                    <li>Langage C</li>
                    <li>Algorithmie</li>
                    <li>Réseau</li>
                    <li>Circuit Logique et Architecture de l'Ordinateur</li>
                    <li>Linux</li>
                    <li>JavaScript</li>
                    <li>SQL</li>
                </ul>
                <p>Vous pourrez répondre jusqu'à 5 questions par thème.</p>
                <p>En haut de la page, une barre de progression indiquera votre progression actuelle.</p>
                <p>Bonne chance à vous !</p>
            </div>
            <div class="center-btn">
                <a href="/home"><button class="submit">Aller au quiz</button></a>
            </div>
        </div>
    </div>

    <?php require "views/templates/footer.html" ?>
</body>

</html>