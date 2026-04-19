<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/assets/img/neonquests_logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/style-questions.css">
    <title>Intro JS</title>
</head>

<body>
    <?php require "views/templates/top-bar.html" ?>

    <div class="card-container">
        <div class="card">
            <h1>JavaScript (JS)</h1>
            <p class="history">Créé par <strong>Brendan Eich</strong> en seulement 10 jours en 1995 !</p>

            <div class="content">
                <h3>Les Points Clés :</h3>
                <ul>
                    <li><strong>L'Action :</strong> Si le HTML est le mur et le CSS la peinture, le JS est l'interrupteur qui allume la lumière.</li>
                    <li><strong>Les Événements :</strong> On dit au navigateur : "QUAND l'utilisateur clique ici, ALORS fais ça".</li>
                    <li><strong>La Console :</strong> Ton meilleur ami pour voir si ton code fonctionne (F12 dans le navigateur).</li>
                </ul>

                <h3>Piste pour l'élève :</h3>
                <p>Ne confonds pas <strong>Java</strong> et <strong>JavaScript</strong>, c'est comme "Car" et "Carpet", ça n'a rien à voir !
                    Commence par créer une alerte toute simple pour vérifier que ton fichier est bien lié.</p>
            </div>
            <div class="center-btn">
                <a href="/question/8/1"><button class="submit">Aller au quiz</button></a>
            </div>
        </div>
    </div>

    <?php require "views/templates/footer.html" ?>
</body>

</html>