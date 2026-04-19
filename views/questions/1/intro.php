<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/assets/img/neonquests_logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/style-questions.css">
    <title>Intro Web</title>
</head>

<body>
    <?php require "views/templates/top-bar.html" ?>

    <div class="card-container">
        <div class="card">
            <h1>Web (HTML / CSS )</h1>
            <p class="history">Inventé par <strong>Tim Berners-Lee</strong> au CERN.</p>
            <div class="content">
                <h3>Les Points Clés :</h3>
                <ul>
                    <li><strong>HTML :</strong> On pose les briques (le texte, les images).</li>
                    <li><strong>CSS :</strong> On peint les briques (les couleurs, la taille).</li>
                    <li><strong>Les Balises :</strong> Tout marche par paires, comme des parenthèses : `<a>` et `</a>`.</li>
                </ul>
                <h3>Piste pour l'élève :</h3>
                <p>Fais attention à bien fermer tes balises. Si tu ne fermes pas une balise de couleur, tout ton site sera de cette couleur !</p>
            </div>
            <div class="center-btn">
                <a href="/question/1/1"><button class="submit">Aller au quiz</button></a>
            </div>
        </div>
    </div>

    <?php require "views/templates/footer.html" ?>
</body>

</html>