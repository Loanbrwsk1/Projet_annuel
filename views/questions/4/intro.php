<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/assets/img/neonquests_logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/style-questions.css">
    <title>Intro Algo</title>
</head>

<body>
    <?php require "views/templates/top-bar.html" ?>

    <div class="card-container">
        <div class="card">
            <h1>Algorithmique</h1>
            <p class="history">Créé par <strong>Al-Khwarizmi</strong> au IXe siècle.</p>

            <div class="content">
                <h3>Les Points Clés (Ne pas oublier !)</h3>
                <ul>
                    <li><strong>Déclaration :</strong> Toujours préciser le type (Entier, Chaîne...) avant d'utiliser une variable.</li>
                    <li><strong>Structures :</strong> `SI...ALORS`, `TANT QUE` (conditionnelle) et `POUR` (itération définie).</li>
                    <li><strong>Indentation :</strong> Crucial pour que ton prof comprenne ton code.</li>
                </ul>
            </div>
            <div class="center-btn">
                <a href="/question/4/1"><button class="submit">Aller au quiz</button></a>
            </div>
        </div>
    </div>

    <?php require "views/templates/footer.html" ?>
</body>

</html>