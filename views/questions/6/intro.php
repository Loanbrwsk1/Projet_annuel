<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/assets/img/neonquests_logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/style-questions.css">
    <title>Intro CLAO</title>
</head>

<body>
    <?php require "views/templates/top-bar.html" ?>

    <div class="card-container">
        <div class="card">
            <h1>Circuits Logiques</h1>
            <p class="history">Basé sur les travaux de <strong>George Boole</strong>. C'est l'électronique du PC.</p>
            <div class="content">
                <h3>Les Points Clés :</h3>
                <ul>
                    <li><strong>0 ou 1 :</strong> Le courant passe (1) ou ne passe pas (0). C'est le binaire.</li>
                    <li><strong>La Porte ET :</strong> Il faut que les deux interrupteurs soient allumés pour que la lampe s'allume.</li>
                    <li><strong>La Porte OU :</strong> Si l'un des deux interrupteurs est allumé, ça suffit.</li>
                </ul>
            </div>
            <div class="center-btn">
                <a href="/question/6/1"><button class="submit">Aller au quiz</button></a>
            </div>
        </div>
    </div>

    <?php require "views/templates/footer.html" ?>
</body>

</html>