<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/assets/img/neonquests_logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/style-questions.css">
    <title>Intro Réseau</title>
</head>

<body>
    <?php require "views/templates/top-bar.html" ?>

    <div class="card-container">
        <div class="card">
            <h1>Réseau</h1>
            <p class="history">Grâce à <strong>Vint Cerf</strong>. C'est la route que prennent tes messages.</p>
            <div class="content">
                <h3>Les Points Clés :</h3>
                <ul>
                    <li><strong>Adresse IP :</strong> C'est l'adresse postale de ton ordinateur dans le monde.</li>
                    <li><strong>Le Switch :</strong> C'est la multiprise qui relie les PC d'une même salle.</li>
                    <li><strong>Le Câble :</strong> Tout commence souvent par un câble RJ45 (celui avec le petit clic).</li>
                </ul>
            </div>
            <div class="center-btn">
                <a href="/question/5/1"><button class="submit">Aller au quiz</button></a>
            </div>
        </div>
    </div>

    <?php require "views/templates/footer.html" ?>
</body>

</html>